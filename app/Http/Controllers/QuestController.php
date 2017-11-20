<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question as Quest;
use App\Result;

class QuestController extends Controller
{
    public function show()
    {
        $quest = Quest::inRandomOrder()->get();

        return view('quest', compact('quest'));
    }

    public function submit()
    {
        // validasi x
        // checkjawaban x
        // true +5 skor x
        // false 0 skor x
        // input skor to db x
        // routing ke result
        $quest = Quest::all();
        $score = 0;
        $answer = [
            request('answer1'),
            request('answer2'),
            request('answer3'),
            request('answer4'),
            request('answer5'),
            request('answer6'),
            request('answer7'),
            request('answer8'),
            request('answer9'),
            request('answer10'),
            request('answer11'),
            request('answer12'),
            request('answer13'),
            request('answer14'),
            request('answer15'),
            request('answer16'),
            request('answer17'),
            request('answer18'),
            request('answer19'),
            request('answer20'),
        ];

        foreach ($quest as $id => $quest) {
            switch ($answer[$id]) {
                case 'a':
                    if ($quest->key == 'a') {
                        $score += 5;
                    }
                    break;
                case 'b':
                    if ($quest->key == 'b') {
                        $score += 5;
                    }
                    break;
                case 'c':
                    if ($quest->key == 'c') {
                        $score += 5;
                    }
                    break;
            }
        }

        if (Result::where('user_id', auth()->id())->exists()) {
            Result::where('user_id', auth()->id())->update([
                'score' => $score
            ]);
        } else {
            Result::create([
                'user_id' => auth()->id(),
                'score' => $score
            ]);
        }

        return redirect()->route('result.show');
    }
}
