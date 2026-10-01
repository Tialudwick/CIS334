<?php

class BaseMessage {
    public function getText(): string {
        return "Hello";
    }
}

class WelcomeMessage extends BaseMessage {
    public function getText(): string {
        return "Welcome to class";
    }
}

$message = new WelcomeMessage();
echo $message->getText(); // Output: Welcome to class