<?php 
    class StringFormat{
        public static $email_body = "Новый заказ от:\n"
                                        . "Имя: %s\n"
                                        . "Почта: %s\n" 
                                        . "Телефон: %s\n"
                                        . "Комментарии: %s\n";
        public static $email_subject = "Заказ от %s";
    }
?>