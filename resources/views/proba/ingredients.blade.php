

    <div class = "form-group">
        <input wire:model="search" type="text" placeholder="nes">
        <ul>
            @foreach($ing as $in)
                <li>{{$in->food_name}}</li>
        </ul>
    </div>
