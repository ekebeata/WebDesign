<?php

class Foglal{
    private $sex;
    private $nev;
    private $mail;
    private $tel;
    private $date;
    private $time;
    private $link;
    private $frizurapic;
    private $text;

    /**
     * Foglal constructor.
     * @param $sex
     * @param $nev
     * @param $mail
     * @param $tel
     * @param $date
     * @param $time
     * @param $link
     * @param $frizurapic
     * @param $text
     */
    public function __construct($sex, $nev, $mail, $tel, $date, $time, $link, $frizurapic, $text)
    {
        $this->sex = $sex;
        $this->nev = $nev;
        $this->mail = $mail;
        $this->tel = $tel;
        $this->date = $date;
        $this->time = $time;
        $this->link = $link;
        $this->frizurapic = $frizurapic;
        $this->text = $text;
    }


    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex): void
    {
        $this->sex = $sex;
    }

    /**
     * @return mixed
     */
    public function getNev()
    {
        return $this->nev;
    }

    /**
     * @param mixed $nev
     */
    public function setNev($nev): void
    {
        $this->nev = $nev;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel): void
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time): void
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link): void
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getFrizurapic()
    {
        return $this->frizurapic;
    }

    /**
     * @param mixed $frizurapic
     */
    public function setFrizurapic($frizurapic): void
    {
        $this->frizurapic = $frizurapic;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text): void
    {
        $this->text = $text;
    }

    public function foglal(){
        $foglalasok = [
            "sex" => $this->sex,
            "nev" => $this->nev,
            "mail" => $this->mail,
            "tel" => $this->tel,
            "date" => $this->date,
            "time" => $this->time,
            "link" => $this->link,
            "frizurapic" => $this->frizurapic,
            "text" => $this->text
        ];

        $file = fopen("../txt/foglal.txt", "a");
        fwrite($file, serialize($foglalasok). "\n");
        fclose($file);
    }
}
