<?php

namespace Github\Model;

class ReactionRollup
{
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var int
     */
    protected $totalCount;
    /**
     * 
     *
     * @var int
     */
    protected $n1;
    /**
     * 
     *
     * @var int
     */
    protected $n12;
    /**
     * 
     *
     * @var int
     */
    protected $laugh;
    /**
     * 
     *
     * @var int
     */
    protected $confused;
    /**
     * 
     *
     * @var int
     */
    protected $heart;
    /**
     * 
     *
     * @var int
     */
    protected $hooray;
    /**
     * 
     *
     * @var int
     */
    protected $eyes;
    /**
     * 
     *
     * @var int
     */
    protected $rocket;
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalCount() : int
    {
        return $this->totalCount;
    }
    /**
     * 
     *
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount) : self
    {
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function get1() : int
    {
        return $this->n1;
    }
    /**
     * 
     *
     * @param int $n1
     *
     * @return self
     */
    public function set1(int $n1) : self
    {
        $this->n1 = $n1;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function get12() : int
    {
        return $this->n12;
    }
    /**
     * 
     *
     * @param int $n12
     *
     * @return self
     */
    public function set12(int $n12) : self
    {
        $this->n12 = $n12;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLaugh() : int
    {
        return $this->laugh;
    }
    /**
     * 
     *
     * @param int $laugh
     *
     * @return self
     */
    public function setLaugh(int $laugh) : self
    {
        $this->laugh = $laugh;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getConfused() : int
    {
        return $this->confused;
    }
    /**
     * 
     *
     * @param int $confused
     *
     * @return self
     */
    public function setConfused(int $confused) : self
    {
        $this->confused = $confused;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHeart() : int
    {
        return $this->heart;
    }
    /**
     * 
     *
     * @param int $heart
     *
     * @return self
     */
    public function setHeart(int $heart) : self
    {
        $this->heart = $heart;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHooray() : int
    {
        return $this->hooray;
    }
    /**
     * 
     *
     * @param int $hooray
     *
     * @return self
     */
    public function setHooray(int $hooray) : self
    {
        $this->hooray = $hooray;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getEyes() : int
    {
        return $this->eyes;
    }
    /**
     * 
     *
     * @param int $eyes
     *
     * @return self
     */
    public function setEyes(int $eyes) : self
    {
        $this->eyes = $eyes;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRocket() : int
    {
        return $this->rocket;
    }
    /**
     * 
     *
     * @param int $rocket
     *
     * @return self
     */
    public function setRocket(int $rocket) : self
    {
        $this->rocket = $rocket;
        return $this;
    }
}