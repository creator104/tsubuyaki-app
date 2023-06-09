<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $user = User::factory()->create(); //テスト用のユーザーを作成する
            $browser->visit('/login')
                ->type('email', $user->email) // テスト用のユーザーのメールアドレスを指定する
                ->type('password', 'password')
                ->press('Log in') // 「LOG IN」ボタンをクリックする
                ->assertPathIs('/tweet') // /tweetに遷移したことを確認する
                ->assertSee('つぶやきアプリ'); // ページ内に「つぶやきアプリ」が表示されていることの確認
        });
    }
}
