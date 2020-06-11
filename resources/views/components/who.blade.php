@if (Auth::guard('web')->check())
<p class="bg-green-500">
    You are Logged In as <strong>USER</strong>
</p>
@else
<p class="bg-red-500">
    You are Logged Out as <strong>USER</strong>
</p>
@endif
@if (Auth::guard('admin')->check())
<p class="bg-green-500">
    You are Logged In as <strong>ADMIN</strong>
</p>
@else
<p class="bg-red-500">
    You are Logged Out as <strong>ADMIN</strong>
</p>
@endif
