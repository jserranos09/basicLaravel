<?php

 namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;   // required to use  'user-id' =>User::factory(),

// required for relationship to the users table, Also need to include use App\Models\User;

class ArticleFactory extends Factory
{
/**
 * The name of the factory's corresponding model.
 *
 * @var string
 */
protected $model = Article::class;

/**
 * Define the model's default state.
 *
 * @return array
 */
    public function definition()
    {
        // This will create fake data
        // go to the database and add the information thats needed there, other than the stuff thats automatically added
        return [
        // Creates a new user in the User Factory
        'user_id' =>User::factory(),
		// titale and excerpt will be a sentence
        'title' => $this->faker->sentence,
		'excerpt' => $this->faker->sentence,
        // body is longer and is a paragraph
		'body' =>$this->faker->paragraph,
        ];
    }
}
