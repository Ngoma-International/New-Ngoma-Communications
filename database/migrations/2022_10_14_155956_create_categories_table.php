<?php

declare(strict_types=1);

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $categories = [
            'Leading Yourself',
            'Leading People',
            'Leading Organisations',
            'Life Skills',
            'Thusa Life Skills'
        ];

        foreach ($categories as $category) {
            Category::query()
                ->create([
                    'name' => $category
                ]);
        }
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
