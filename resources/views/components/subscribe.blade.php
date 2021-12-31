<div>
    <section class="subscribe_section">
        <div class="center">
            <div class="subscribe_in w-100 d-flex align-items-center justify-content-center ">
                <div class="subscribe_in_main  d-flex  justify-content-between align-items-center  ">
                    <div class="subscirbe_text">
                        <p>
                            @lang('index.subscriber')
                        </p>
                    </div>
                    <form method="post" action="{{route('subscriber')}}">
                        @CSRF
                    <div class="subscribe_inputs d-flex justify-content-between ">
                        <input type="email" name="email" required placeholder="@lang('index.typeEmail') ">
                        <button type="submit" class="subscribe_btn">
                            @lang('index.submit')
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
