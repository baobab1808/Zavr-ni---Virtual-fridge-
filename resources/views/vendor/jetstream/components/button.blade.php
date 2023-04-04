<button {{ $attributes->merge(['type' => 'submit', 'class'=>'btn btn-primary btn-rounded', 'style' => 'background-color:black; border-color:black; color:white; font-family:"Open Sans"; font-weight:bold; text-align:center; width:150px; font-size:20px']) }}>
    {{ $slot }}
</button>
