<?php

namespace Tests\Feature;

use App\Models\Display;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Tests\TestCase;

class DisplayTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $stub = __DIR__.'/stubs/stub.jpg';
        $name = Str::random(8).'.jpg';
        $path = sys_get_temp_dir().'/'.$name;

        copy($stub, $path);

        $file = new UploadedFile($path, $name, filesize($path), null, true);

        $data = [
            'reseller_id' => 1,
            'type' => Display::ACCESSORY_TYPE,
            'serial_number' => Str::random(20),
            'attachment' => $file
        ];

        $response = $this->postJson('/displays', $data);

        $response->assertStatus(200);
        $content = json_decode($response->getContent());
        $this->assertObjectHasAttribute('name', $content);

        $uploaded = 'uploads'.DIRECTORY_SEPARATOR.$content->name;
        $this->assertFileExists(public_path($uploaded));

        @unlink($uploaded);


        $response = $this->delete('/displays/1');

        $response->assertStatus(200);

    }
}
