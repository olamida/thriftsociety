                    <div class="footer-wrapper">
                        <div class="footer-section f-section-1">
                            <p class="">Copyright © 2020 
                                <a target="_blank" href="https://designreset.com">DesignReset</a>
                                ,All rights reserved.
                                <strong>
                                    @lang('Copyright') &copy; {{ date('Y') }}
                                    <x-utils.link href="http://laravel-boilerplate.com" target="_blank" :text="__(appName())" />
                                </strong>
                            </p>
                        </div>
                        <div class="footer-section f-section-2">
                            <p class="">
                                @lang('Powered by')
                                <x-utils.link href="http://olandasolutions.com" target="_blank" :text="__(appName())" /> &
                                <x-utils.link href="https://olandasolutions" target="_blank" text="Olanda Solutions" />
                            </p>
                        </div>
                    </div>
                