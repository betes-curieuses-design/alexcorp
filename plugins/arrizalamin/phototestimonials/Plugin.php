<?php namespace ArrizalAmin\PhotoTestimonials;

use System\Classes\PluginBase;
use Mja\Testimonials\Controllers\Testimonials as TestimonialsController;
use Mja\Testimonials\Models\Testimonial as TestimonialModel;

/**
 * PhotoTestimonials Plugin Information File
 */
class Plugin extends PluginBase
{
    public $require = ['Mja.Testimonials'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Photo Testimonials',
            'description' => 'This plugin is an extension to the Mja.Testimonials plugin. This extension enables uploading photo for testimonials.',
            'author'      => 'arrizalamin',
            'icon'        => 'icon-file-image-o'
        ];
    }

    public function boot()
    {
        TestimonialModel::extend(function($model) {
            $model->attachOne['photo'] = ['System\Models\File'];
        });
        TestimonialsController::extendFormFields(function($form, $model, $context) {
            if(! $model instanceof TestimonialModel)
                return;

            

            $form->addFields([
                'photo' => [
                    'label' => 'Photo',
                    'type' => 'fileupload',
                    'mode' => 'image',
                    'imageHeight' => 250,
                    'imageWidth' => 250
                ]
            ]);
        });
    }

}
