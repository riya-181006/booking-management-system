<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class BookingController extends Controller
{
    public function index()
    {
        $query = Booking::select('bookings.*', 'users.name as user_name');
        $query->leftJoin('users', 'bookings.user_id', '=', 'users.id');
        $data = $query->get();
        return view('AdminDashboard.Bookings.index', ['data' => $data]);
    }
    public function userBookings(){  
    $query = Booking::select('bookings.*', 'users.name as user_name');
    $query->leftJoin('users', 'bookings.user_id', '=', 'users.id');
    $query->where('bookings.user_id', Auth::id());
    $data = $query->get();
    return view('UserDashboard.Bookings.index', ['data' => $data]);
    }
    public function add(){
        $data = User::get();
        return view('AdminDashboard.Bookings.addEdit',['data'=>$data]);

    }
    public function save(Request $request){
    $booking = new Booking([
        'name' => $request->get('booking_name'),
        'booking_datetime' => $request->get('booking_on'),
        'status' => $request->get('booking_status'),
        'user_id' => Auth::user()->user_type == 1 
            ? $request->get('user_name') 
            : Auth::id()
    ]);
    $booking->save();
    if(Auth::user()->user_type == 1){
        $route = 'booking.all';
    } else {
        $route = 'booking.my';
    }
    return redirect()->route($route);
}
    public function getBookingsById($id){
        $data = User::get();
        $booking = Booking::find($id);
        return view('AdminDashboard.Bookings.addEdit', [
            'data' => $data,
            'booking' => $booking
        ]);
    }
    public function updateBookingsById(Request $request, $id){
        $booking = Booking::find($id);
        $booking->name = $request->get('booking_name');
        $booking->booking_datetime = $request->get('booking_on');
        $booking->status = $request->get('booking_status');
        $booking->user_id = Auth::user()->user_type == 1
            ? $request->get('user_name')
            : Auth::id();
        $booking->save();
        if(Auth::user()->user_type == 1){
            $route = 'booking.all';
        } else {
            $route = 'booking.my';
        }
        return redirect()->route($route);
    }
    public function viewDelete($id){
        if(Auth::user()->user_type == 1){
            $view = 'AdminDashboard.Bookings.delete';
        } else {
            $view = 'UserDashboard.Bookings.delete';
        }
        $booking = Booking::find($id);
        return view($view, ['booking' => $booking]);
    }
    public function delete($id){
    Booking::where('id', $id)->delete();
    return redirect('/booking/all'); 
}
}
