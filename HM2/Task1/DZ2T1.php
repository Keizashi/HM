<?php

class Lathe
{
    private $workingState = false;
    private $modeOfWork;

    public function startOn($impulse)
    {
        if ($impulse == 'on') {
            $this->workingState = true;
        }
    }

    public function changeMode($level)
    {
        if ($level == 'low') {
            $this->modeOfWork = 'slow';
        } elseif
        ($level == 'high') {
            $this->modeOfWork = 'fast';
        } else {
            echo "input parameters slow or fast \n";
        }

    }
}

class CrossRoad
{
    private $typeOfCrossRoad;
    private $quantityOfRoads;
    private $allowDrive = false;

    public function defineCrossRoad($type)
    {
        if ($type == '3 ways') {
            $this->typeOfCrossRoad = "T-type of crossroad";
        } elseif ($type == '4 ways') {
            $this->typeOfCrossRoad = "X-type of crossroad";
        }
    }

    public function setQuantityOfRoads($quantity)
    {
        if ($quantity) {
            $this->quantityOfRoads = $quantity;
        }
    }

    public function allowToDrive($signal)
    {
        if ($signal = 'green') {
            $this->allowDrive = true;
        }
    }
}

class InternationalMail
{
    private $deliveryStatus;

    public function checkOnDelivery($sendStatus)
    {
        if ($sendStatus == 'ok') {
            $this->deliveryStatus = 'your mail delivered';
        } else {
            echo 'something gone wrong';
        }
    }
}

class DiscordAccount
{
    private $userAccountStatus;
    private $typeOfApplication;

    public function chooseDesktopOrMobile($type)
    {
        if ($type == 'desktop') {
            $this->typeOfApplication = 'desktop version of account';
        } elseif ($type = 'mobile') {
            $this->typeOfApplication = 'mobile version of account';
        }
    }

    public function logOn($data)
    {
        if ($data == 'nickname:password') {
            $this->userAccountStatus = 'online';
        } else {
            echo 'wrong password or login';
        }
    }
}

class TelegramMessage
{
    private $sender;
    private $recipient;
    private $messageToSend;
    private $statusOfSender;
    private $statusOfMessage;
    private $statusOfRecipient;

    public function logOn($sender)
    {
        if ($sender == 'nickname:password') {
            $this->statusOfSender = 'online';
        } else {
            echo 'wrong password or login';
        }

    }

    public function checkRecipientStatus($recipient)
    {
        if ($recipient == 'loggedOn') {
            $this->statusOfRecipient = 'online';
        } else {
            $this->statusOfRecipient = 'offline';
        }
    }

    public function selectRecipient($recipient)
    {
        if ($recipient == 'friend' && $statusOfRecipient == 'online') {
            echo 'your friend is online, type a message';
        } else {
            echo 'your friend is offline, message will not be delivered';
        }
    }

    public function sendMessage($toWhom, $message)
    {
        $this->recipient = $toWhom;
        $this->messageToSend = $message;
        if ($statusOfRecipient == 'online') {
            $this->statusOfMessage = 'message delivered succesfully';
            echo 'message delivered';
        } else {
            $this->statusOfMessage = 'message delivery failed';
            echo 'your friend is offline';
        }
    }
}
