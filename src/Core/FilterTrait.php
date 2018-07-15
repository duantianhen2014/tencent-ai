<?php
/**
 * Created for tencent-ai
 * User: 丁海军
 * Date: 2018/6/30
 * Time: 下午7:53.
 */

namespace Justmd5\TencentAi\Core;

trait FilterTrait
{
    protected $filterArray = [
        'aai'    => [
            'asr'           => [
                'format'       => 'require|integer|in:1,2,3,4',
                'speech'       => 'require|string|max:8192',
                'rate'         => 'require|integer|in:8000,16000',
            ],
            'asrs'          => [],
            'wxasrs'        => [],
            'wxasrlong'     => [],
            'tts'           => [],
            'tta'           => [],
            'detectkeyword' => [ //关键词检索
                                 'callback_url' => 'require|url',
                                 'speech'       => 'required_without:speech_url',
                                 'speech_url'   => 'required_without:speech',
                                 'key_words'    => 'required',
                                 'format'       => 'require|integer|in:1',
            ],
        ],
        'face'   => [
            'detectface'         => [],
            'detectmultiface'    => [],
            'facecompare'        => [],
            'detectcrossageface' => [],
            'faceshape'          => [],
            'faceidentify'       => [],
            'faceverify'         => [],
            'newperson'          => [],
            'delperson'          => [],
            'addface'            => [],
            'delface'            => [],
            'setinfo'            => [],
            'getinfo'            => [],
            'getgroupids'        => [],
            'getpersonids'       => [],
            'getfaceids'         => [],
            'getfaceinfo'        => [],
        ],
        'image'  => [
            'terrorism' => [],
            'food'      => [],
            'tag'       => [],
            'fuzzy'     => [],
        ],
        'nlp'    => [
            'speechtranslate' => [],
            'textpolar'       => ['text' => 'required|max:200'],
            'texttrans'       => [],
            'texttranslate'   => [],
            'textchat'        => [
                'session'  => 'required|max:32',
                'question' => 'required|max:3000',
            ],
            'textdetect'      => ['text' => 'required|max:1024'],
            'imagetranslate'  => [
                'image'      => 'required|max:1024',
                'session_id' => 'required|max:64',
            ],
            'wordner'         => ['text' => 'required|max:1024'],
            'wordpos'         => ['text' => 'required|max:1024'],
            'wordseg'         => ['text' => 'required|max:1024'],
            'wordsyn'         => ['text' => 'required|max:1024'],
            'wordcom'         => ['text' => 'required|max:100'],
        ],
        'ocr'    => [
            'idcardocr'        => [],
            'bcocr'            => [],
            'driverlicenseocr' => [],
            'plateocr'         => [],
            'bizlicenseocr'    => [],
            'creditcardocr'    => [],
            'generalocr'       => [],
            'handwritingocr'   => [],
        ],
        'ptu'    => [
            'facecosmetic'   => [],
            'facedecoration' => [],
            'facemerge'      => [],
            'facesticker'    => [],
            'faceage'        => [],
            'imgfilter'      => [],
        ],
        'vision' => [
            'porn'        => [],
            'scener'      => [],
            'objectr'     => [],
            'imgidentify' => [],
            'imgtotext'   => [],
            'imgfilter'   => [],
        ],
    ];
}
