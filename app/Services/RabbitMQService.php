<?php

namespace App\Services;

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class RabbitMQService
{
    protected $connection;
    protected $channel;

    public function __construct()
    {
        $this->connection = new AMQPStreamConnection(
            env('RABBITMQ_HOST'),
            env('RABBITMQ_PORT'),
            env('RABBITMQ_USER'),
            env('RABBITMQ_PASSWORD')
        );

        $this->channel = $this->connection->channel();
        $this->channel->queue_declare(env('RABBITMQ_QUEUE'), false, false, false, false);
    }

    public function sendMessage($message)
    {
        $msg = new AMQPMessage($message);
        $this->channel->basic_publish($msg, '', env('RABBITMQ_QUEUE'));
    }

    public function __destruct()
    {
        $this->channel->close();
        $this->connection->close();
    }
}
