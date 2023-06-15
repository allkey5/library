<?php

namespace App\Repositories\Interfaces;

Interface CategoryRepositoryInterface {
    public function all();
    public function delete($category);
}