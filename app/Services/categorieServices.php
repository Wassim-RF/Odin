<?php
    namespace App\Services;

    use App\Models\User;
    use App\Models\Categories;

    class CategorieServices {
        public function categorieNumber() {
            return Categories::where('user_id' , session('user_id'))->count();
        }

        public function createCategorie(array $data) {
            return Categories::create($data);
        }
    }
