<?php

namespace App\Models\ShellScript;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterShellScript extends Model
{
    use HasFactory;

    protected $fillable = [
        "shell_script_file_name",
        "argument",
        "shell_script_code",
        "execute_example",
        "prepare_shell_script_code",
        "prepare_execute_example",
    ];
}
