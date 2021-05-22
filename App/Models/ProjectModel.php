<?php

namespace App\Models;

class ProjectModel extends Model {

    protected
    $id,
    $title,
    $techno,
    $picture;

    public function __construct() {
        $this->table = " project ";
        $this->elements = " * ";
    }


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of techno
     */
    public function getTechno()
    {
        return $this->techno;
    }

    /**
     * Set the value of techno
     *
     * @return  self
     */
    public function setTechno($techno)
    {
        $this->techno = $techno;

        return $this;
    }

    /**
     * Get the value of picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }
}