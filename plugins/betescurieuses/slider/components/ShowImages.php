<?php namespace BetesCurieuses\Slider\Components;

use Cms\Classes\ComponentBase;
use BetesCurieuses\Slider\Models\Slider as BaseSlider;
use RainLab\Translate\Classes\Translator as languageTranslator;

class ShowImages extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'Show Images',
            'description' => 'Show images on Slider'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $translator = languageTranslator::instance();
        $lang = $translator->getLocale();

        $this->addJs('assets/js/slider.js');
        $this->addCss('assets/css/slider.css');
        $this->page['sliders'] = BaseSlider::showSliders($lang);
    }

}