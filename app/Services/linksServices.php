<?php
    namespace App\Services;

    use App\Models\User;
    use App\Models\Links;

    class LinksServices {
        public function linkNumber() {
            return Links::where('user_id' , session('user_id'))->count();
        }

        public function createLink(array $data) {
            return Links::create($data);
        }

        public function linkInMounth() {
            return Links::whereBetween('created_at', [now()->startOfMonth(), now()->endOfMonth()])->where('user_id' , session('user_id'))->count();
        }

        public function deleteLink(int $id) {
            return Links::find($id)->delete();
        }
    }
