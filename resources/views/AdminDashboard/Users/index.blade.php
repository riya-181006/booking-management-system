@extends('AdminDashboard.Layout.adminBaseView')
@section('dashContent')
<style>
  .action-wrapper {
    position: relative;
    display: inline-block;
  }
  .dots-btn {
    background: #f1f5f9;
    border: none;
    border-radius: 6px;
    width: 32px;
    height: 32px;
    font-size: 1.2rem;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #475569;
    transition: background 0.15s;
  }
  .dots-btn:hover {
    background: #e2e8f0;
  }
  .action-dropdown {
    display: none;
    position: absolute;
    right: 0;
    top: 36px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.12);
    min-width: 140px;
    z-index: 999;
    overflow: hidden;
  }
  .action-dropdown.show {
    display: block;
  }
  .action-dropdown a {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.65rem 1rem;
    font-size: 0.9rem;
    text-decoration: none;
    color: #1e293b;
    transition: background 0.12s;
  }
  .action-dropdown a:hover {
    background: #f8fafc;
  }
  .action-dropdown a.delete-link {
    color: #ef4444;
  }
  .action-dropdown a.delete-link:hover {
    background: #fff5f5;
  }
  .action-dropdown a i {
    font-size: 0.95rem;
  }
</style>
    <div class="container">
        <a href="{{route('user.add')}}" class="btn btn-primary mb-2 float-end">Create New User</a>
        <table class="table table-light table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">User Name</th>
                <th scope="col">User Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @php $i = 1; @endphp
                @foreach($data as $user)
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{@$user->name}}</td>
                    <td>{{@$user->email}}</td>
                    <td>
                      <div class="action-wrapper">
                        <button class="dots-btn" onclick="toggleDropdown(this)">⋮</button>
                        <div class="action-dropdown">
                          <a href="{{route('user.edit', ['id' => $user->id])}}">
                            <i class="bi bi-pencil-square text-primary"></i> Edit
                          </a>
                          <a href="{{route('user.delete.view', ['id' => $user->id])}}" class="delete-link">
                            <i class="bi bi-trash"></i> Delete
                          </a>
                        </div>
                      </div>
                    </td>
                </tr>
                @php $i++; @endphp
                @endforeach
            </tbody>
        </table>
    </div>
<script>
  function toggleDropdown(btn) {
    const dropdown = btn.nextElementSibling;
    const isOpen = dropdown.classList.contains('show');
    document.querySelectorAll('.action-dropdown.show').forEach(d => d.classList.remove('show'));
    if (!isOpen) dropdown.classList.add('show');
  }
  document.addEventListener('click', function(e) {
    if (!e.target.closest('.action-wrapper')) {
      document.querySelectorAll('.action-dropdown.show').forEach(d => d.classList.remove('show'));
    }
  });
</script>
@endsection