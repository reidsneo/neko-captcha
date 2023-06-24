<?php
namespace Neko\Captcha;

/**
  * Verification code interface
  * Interface CaptchaBuilderInterface
  * @package Neko\Captcha
  */
interface CaptchaBuilderInterface
{
    /**
     * Create verification image
    * @return mixed
    */
    public function create();

    /**
     * Save the verification code image to the specified path
    * @param string $filename physical path
    * @param int $quality clarity
    * @return mixed
    */
    public function save($filename, $quality);

    /**
     * Get the verification code picture
    * @param int $quality clarity
    * @return mixed
    */
    public function output($quality);

    /**
     * Get verification code content
    * @return mixed
    */
    public function getText();
}