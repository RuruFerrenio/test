<?php
//Класс MyLogger имплементирует интерфейс
class MyLogger implements LoggerInterface{
    public function log($level, $message, array $context = []);
}

//Использование
$logger1 = new MyLogger();
$logger1->log('debug','Log something');
$logger1->log('info','Debugging');

//Интерфейс наследует LoggerInterface
interface MyLoggerInterface extends LoggerInterface{
    // В LoggerInterface: public function log($level, $message, array $context = []);
    public function log($message, $level = 'debug',array $contex =[]);
}

//Переопределяем класс MyLogger, имплементируя его от подтипа базоваого интерфейса LoggerInterface
class MyLogger implements MyLoggerInterface{
    //Реализуем новую сигнатуру log
}

//Использование
$logger->log('Log something');//По умолчанию debug
$logger->log('Debugging','info');
