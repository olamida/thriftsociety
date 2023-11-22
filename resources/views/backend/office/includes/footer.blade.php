
    <div class="copyright">
      <strong>
        @lang('Copyright') &copy; {{ date('Y') }}
        <x-utils.link href="http://laravel-boilerplate.com" target="_blank" :text="__(appName())" />
      </strong>

      @lang('All Rights Reserved')
    </div>
    <div class="credits">
      @lang('Powered by')
      <x-utils.link href="http://olandasolutions.com" target="_blank" :text="__(appName())" /> &
      <x-utils.link href="https://olandasolutions" target="_blank" text="Olanda Solutions" />
    </div>
