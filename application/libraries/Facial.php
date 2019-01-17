<?php

    class Facial{
        private $image_user;
        private $images_compare;

        public function setFacial($image_user,$image_compare){

            $this->image_user = $image_compare;
            $this->images_compare = $image_compare;
        }

        public function ReCreateImage($image){

            $id_image = imagecreatefromjpeg($image);
            return $id_image;

        }

        public function DeleteImageInMemory($image){
            $destroy = imagedestroy($image);
            return $destroy;
        }

        public function getImageCompare(){

            return $this->images_compare;
        }

        public function getImageUser(){

            return $this->image_user;
        }

        public function SendToNavigator($image){

            header('Content-Type: image/png');
            imagepng($image);
        }

        public function ResolutionImage($image){
            
            $resolution = imageresolution($image,100,100);
            return $resolution;
        }

        public function DetectFace($image){

            $rectagle = imagefilledrectangle($image,100,100,150,160,4);


        }

    }