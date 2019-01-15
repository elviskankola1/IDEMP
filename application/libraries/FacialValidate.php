<?php

    class FacialValidate{
        private $image_user;
        private $images_compare;

        function __construct($image_user,$image_compare){
            
            $this->image_user = $image_compare;
            $this->images_compare = $image_compare;
        }

        protected function ReCreateImage($image){

            $id_image = imagecreatefromjpeg($image);
            return $id_image;

        }

        protected function DeleteImageInMemory($image){
            $destroy = imagedestroy($image);
            return $destroy;
        }

        protected function getImageCompare(){

            return $this->images_compare;
        }

        protected function getImageUser(){

            return $this->image_user;
        }

        protected function SendToNavigator($image){

            header('Content-Type: image/png');
            imagepng($image);
        }

        public function ResolutionImage($image){
            
            $resolution = imageresolution($image,100,100);
            return $resolution;
        }

    }