<div>
    <div>
        <button wire:click='plas'>+</button>
        {{ $number }}
    </div>
    <div>
        <labal for="input">{{ $input_1 }}</labal>
        <input type="text" id="input"  wire:model="input_1"/>
    </div>
    <div>
        <labal for="input">{{ $input_2 }}</labal>
        <input type="text" id="input"  wire:model.debounce.1500ms="input_2"/>
        <!-- --------- input بالا با استفاده از debounce.1500ms اطلاعات رو با همان زمان تخیر ارسال میکنه برای کم شدن درخواست ها به سرور ---------->
    </div>
    <div>
        <labal for="input">{{ $input_3 }}</labal>
        <input type="text" id="input"  wire:model.lazy="input_3"/>
        <!-- ------  اطلاعات زمانی که خارج از input کلیک کنید ارسال میشه  ------>
    </div>
    <div>
        <labal for="input">{{ $input_4 }}</labal>
        <input type="text" id="input"  wire:model.defer="input_4"/>
        <!--  ------ با استفاده از دکمه اطلاعات ارسال میشه ------->
        <button wire:click="save">save</button>
    </div>
    <form wire:submit.prevent="save">
        <div>
            <labal for="input">{{ $input_5 }}</labal>
            <input type="text" id="input"  wire:model.defer="input_5"/>
            <!--  ------ با استفاده از دکمه اطلاعات ارسال میشه ------->
            <!-- ---------  بدون تازه سازی صفحه اطلاعات ارسال میشه ------>
            <button>save</button>
        </div>
    </form>
    <div>
        <ul>
            @foreach ($product as $products)
            <li>{{ $products->name }}</li>
            @endforeach
        </ul>
    </div>
</div>
