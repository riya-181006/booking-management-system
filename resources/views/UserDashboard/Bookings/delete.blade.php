@extends('UserDashboard.Layout.userBaseView')
@section('dashContent')

<div class="delete-card">
    <div class="delete-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
        </svg>
    </div>
    <h5 class="delete-title">Delete Booking</h5>
    <p class="delete-message">Are you sure you want to delete this booking? This action <strong>cannot be undone</strong>.</p>

    <form action="{{ route('booking.delete', ['id' => Request::segment(3)]) }}" method="post">
        @csrf
        <div class="delete-actions">
            <a href="{{ route('booking.my') }}" class="btn-cancel">Cancel</a>
            <button type="submit" class="btn-confirm-delete">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" style="margin-right:6px;margin-top:-2px"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                Yes, Delete
            </button>
        </div>
    </form>
</div>

<style>
    .delete-card {
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 4px 24px rgba(0,0,0,0.08);
        padding: 2.5rem 2rem;
        max-width: 440px;
        text-align: center;
        border-top: 4px solid #e74c3c;
    }

    .delete-icon {
        width: 70px; height: 70px;
        background: #fff5f5;
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        margin: 0 auto 1.25rem;
        color: #e74c3c;
        border: 2px solid #fde8e8;
    }

    .delete-title {
        font-size: 1.2rem;
        font-weight: 700;
        color: #0d1b2a;
        margin-bottom: 0.6rem;
    }

    .delete-message {
        font-size: 0.875rem;
        color: #666;
        margin-bottom: 1.75rem;
        line-height: 1.6;
    }

    .delete-actions {
        display: flex;
        gap: 12px;
        justify-content: center;
    }

    .btn-cancel {
        padding: 9px 24px;
        border-radius: 10px;
        border: 1.5px solid #d0d5dd;
        background: #fff;
        color: #444;
        font-size: 0.875rem;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.2s;
    }

    .btn-cancel:hover {
        background: #f5f5f5;
        border-color: #aaa;
        color: #222;
    }

    .btn-confirm-delete {
        padding: 9px 24px;
        border-radius: 10px;
        border: none;
        background: linear-gradient(135deg, #e74c3c, #c0392b);
        color: #fff;
        font-size: 0.875rem;
        font-weight: 600;
        cursor: pointer;
        display: flex;
        align-items: center;
        transition: all 0.25s;
        box-shadow: 0 4px 12px rgba(231,76,60,0.35);
    }

    .btn-confirm-delete:hover {
        background: linear-gradient(135deg, #c0392b, #a93226);
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(231,76,60,0.45);
    }
</style>

@endsection