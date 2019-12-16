<?php

Namespace App\Http\Controllers;

class TestController 
{
    public function mike()
    {
        $name = "Mike";
        $title = "The Commander in Chief";
        $color = "Blue";
        $image = "3ixth5.jpg";

        return view("default", [
            'name' => $name, 
            'title' => $title, 
            'color' => $color, 
            'image' => $image
            ]);
    }
    public function miles()
    {
        $name = "Miles";
        $title = "The Cool Guy";
        $color = "Green";
        $image = "3j57a7.jpg";

        return view("default", [
            'name' => $name, 
            'title' => $title, 
            'color' => $color, 
            'image' => $image
        ]);
    }
    public function luis()
    {
        $name = "Luis";
        $title = "Mini-Mike";
        $color = "Meh";
        $image = "3j5aa7.jpg";

        return view("default", [
            'name' => $name,
            'title' => $title,
            'color' => $color,
            'image' => $image
        ]);
    }

}