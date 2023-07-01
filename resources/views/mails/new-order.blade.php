Новая заявка:

Имя: {{ request()->name }}
Телефон: {{ request()->phone }}
@if (!empty(request()->email))
Email: {{ request()->email }}
@endif
@if (!empty(request()->description))
Описание: {{ request()->description }}
@endif
