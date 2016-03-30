<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\lorem;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoremController extends Controller {

        private static $rules = [
                        'lorem_num_sentences' => 'required_if:lorem_format,0|integer|min:1|max:40',
                        'lorem_num_paragraphs' => 'required_if:lorem_format,0|integer|min:1|max:40',
                        'lorem_num_items' => 'required_if:lorem_format,1,2|integer|min:5|max:100',
        ];
        
        private static $messages = [
                        'lorem_num_sentences.required_if' => 'Please enter the number of sentences per paragraph.',
                        'lorem_num_sentences.integer' => 'Number of sentences must be an integer between 1 and 40.',
                        'lorem_num_sentences.min' => 'Number of sentences must be an integer between 1 and 40.',
                        'lorem_num_sentences.max' => 'Number of sentences must be an integer between 1 and 40.',
                        'lorem_num_paragraphs.required_if' => 'Please enter the number of paragraphs in your text.',
                        'lorem_num_paragraphs.integer' => 'Number of paragraphs must be an integer between 1 and 40.',
                        'lorem_num_paragraphs.min' => 'Number of paragraphs must be an integer between 1 and 40.',
                        'lorem_num_paragraphs.max' => 'Number of paragraphs must be an integer between 1 and 40.',
                        'lorem_num_items.required_if' => 'Please enter the number of items in your list.',
                        'lorem_num_items.integer' => 'Number of items must be an integer between 5 and 100.',
                        'lorem_num_items.min' => 'Number of items must be an integer between 5 and 100.',
                        'lorem_num_items.max' => 'Number of items must be an integer between 5 and 100.',
                ];

        public function getIndex() {
                $output = "from lorem get";
                return view('lorem.index', ['output' => $output]);
        }
        
        public function postIndex(Request $request) {
                $this->validate($request, self::$rules, self::$messages);
                $output = "from lorem post";
                return view('lorem.index', ['output' => $output]);
        }

}