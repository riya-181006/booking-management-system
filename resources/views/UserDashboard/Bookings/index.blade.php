@extends('UserDashboard.Layout.userBaseView')
@section('dashContent')
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('booking.add') }}" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" style="margin-right:6px;margin-top:-2px"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
            Create New Booking
        </a>
    </div>
    <div class="card" style="width:100%">
        <div class="card-body p-0">
            <table class="table table-hover mb-0" style="width:100%; table-layout:auto;">
                <thead>
                    <tr>
                        <th scope="col" style="width:60px">#</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Booking Name</th>
                        <th scope="col">Booked For</th>
                        <th scope="col" style="width:100px; text-align:center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @forelse($data as $booking)
                    <tr>
                        <th scope="row">{{ $i }}</th>
                        <td>{{ @$booking->user_name }}</td>
                        <td>{{ @$booking->name }}</td>
                        <td>{{ @$booking->booking_datetime }}</td>
                        <td style="text-align:center">
                            <div class="action-dropdown">
                                <button class="action-toggle" onclick="toggleDropdown(this)" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                    </svg>
                                </button>
                                <div class="action-menu">
                                    <a href="{{ route('booking.edit', ['id' => $booking->id]) }}" class="action-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                        Edit
                                    </a>
                                    <a href="{{ route('booking.delete.view', ['id' => $booking->id]) }}" class="action-item action-item-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @php $i++; @endphp
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-4" style="color:#888; font-size:0.875rem;">
                            No bookings found.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
<style>
    .main-content { display: flex; flex-direction: column; }
    .main-content > .page-header,
    .main-content > * { width: 100%; box-sizing: border-box; }
    .action-dropdown {
        position: relative;
        display: inline-block;
    }
    .action-toggle {
        background: rgba(44, 83, 100, 0.08);
        border: 1.5px solid rgba(44, 83, 100, 0.15);
        border-radius: 8px;
        padding: 5px 10px;
        cursor: pointer;
        color: #2c5364;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .action-toggle:hover {
        background: rgba(41, 182, 246, 0.15);
        border-color: #29b6f6;
        color: #0277bd;
    }
    .action-menu {
        display: none;
        position: absolute;
        right: 0;
        top: calc(100% + 6px);
        background: #fff;
        min-width: 145px;
        border-radius: 12px;
        box-shadow: 0 8px 28px rgba(0,0,0,0.14);
        border: 1px solid #e2e8f0;
        z-index: 999;
        overflow: hidden;
        animation: dropIn 0.18s ease;
    }
    .action-menu.open { display: block; }
    @keyframes dropIn {
        from { opacity: 0; transform: translateY(-6px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    .action-item {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 10px 14px;
        font-size: 0.82rem;
        font-weight: 500;
        color: #333;
        text-decoration: none;
        transition: background 0.15s;
    }
    .action-item:hover { background: #f0f7ff; color: #0277bd; }
    .action-item-danger { color: #c0392b; }
    .action-item-danger:hover { background: #fff5f5; color: #c0392b; }
</style>
<script>
    function toggleDropdown(btn) {
        const menu = btn.nextElementSibling;
        const isOpen = menu.classList.contains('open');
        document.querySelectorAll('.action-menu.open').forEach(m => m.classList.remove('open'));
        if (!isOpen) menu.classList.add('open');
    }
    document.addEventListener('click', function (e) {
        if (!e.target.closest('.action-dropdown')) {
            document.querySelectorAll('.action-menu.open').forEach(m => m.classList.remove('open'));
        }
    });
</script>
@endsection