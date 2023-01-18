<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class VideoTutorials extends Component
{
    public array $videoTutorials = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->videoTutorials = [
            [
                'videoId' => 'fDkR0TDR9dI',
                'title' => ' Git & GitHub  ',
                'description' => 'كورس تعلم جيت وجيت هب وهما عبارة عن version control system  تمكنك من حفظ التقدم في مشاريعك البرمجية والمشاركة في مشاريع الآخرين على جيت هب وأيضا رفع المشاريع على جيت هب
.'
            ],
            [
                'videoId' => 'taL3r_JpwBg',
                'title' => 'Web Scraping with Python Beautiful Soup - تعلم استخراج البيانات من اي موقع على الانترنت',
                'description' => 'in this video we will learn web scraping with python using beautiful soup library to collect data from the web which is especially useful for data science and data analysis for collecting large amounts of data automatically and data scraping, and in this video we will collect data about football matches and the world cup 2022 matches schedule by scraping the data from a football website and adding the data from the python script to a csv file.'
            ],
            [
                'videoId' => 'pYdB2uG9pnE',
                'title' => 'Linux Crash Course',
                'description' => 'لو انت اتعاملت مع نظام لينكس قبل كده لكن حاسس نفسك مش كويس اوى فيه أو لسه عايز تتعلم نظام كالي لينكس ومتعرفش اي حاجه عنه حرفيًا! 
فأحب اقولك انت في المكان الصح! بعد الانتهاء من الكورس او الفيديو ده هيبقي عندك معرفه كبيره جدًا بالنظام! وهتعرف ازاي تتعامل مع كل حاجه موجوده فيه بشكل احترافي بإذن الله.
.'
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.video-tutorials');
    }
}
