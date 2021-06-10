<?php

namespace src;

class EmailService
{
    private $de;
    private $para;
    private $assunto;
    private $conteudo;

    public function __construct(
        string $de = 'contato@site.com.br',
        string $para = '',
        string $assunto = '',
        string $conteudo = ''
    ) {
        $this->de = $de;
        $this->para = $para;
        $this->assunto = $assunto;
        $this->counteudo = $conteudo;
    }

    public static function dispararEmail()
    {
        return "---- envia e-mail ----";
    }
}
