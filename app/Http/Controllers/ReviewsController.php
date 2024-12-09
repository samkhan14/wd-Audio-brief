<?php

namespace App\Http\Controllers;

use App\Models\CustomerReviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function getReviews()
    {
        $result = CustomerReviews::all();
        echo json_encode($result);
    }
    public function one_reviews()
    {
        $data = $_POST['username'];
        echo json_encode($data);
    }
}
