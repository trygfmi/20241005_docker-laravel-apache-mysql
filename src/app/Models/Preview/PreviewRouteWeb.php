<?php

namespace App\Models\Preview;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreviewRouteWeb extends Model
{
    use HasFactory;

    protected $fillable = [
        "view_file_name",
        "route_url",
        "controller",
        "get_method",
        "get_helper_name",
        "middleware",
        "post_method",
        "post_helper_name",
        "model",
        "table_name",
    ];
}
