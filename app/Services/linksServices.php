<?php
    namespace App\Services;

    use App\Models\User;
    use App\Models\Links;

    class LinksServices {
        public function linkNumber() {
            return Links::where('user_id' , session('user_id'))->count();
        }
    }
