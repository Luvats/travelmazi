

<form action="{{route('process-payment')}}" method="post" >
@csrf
                        <script src="https://checkout.razorpay.com/v1/checkout.js"
                                data-key="rzp_test_RBhXBPZwrjxeML"
                                data-amount={{$totalFare*100}}
                                data-currency="INR"
                                data-buttontext="Pay"
                                data-name='Travel Mazi Flight Booking'
                                data-description="Booking No"
                                data-image={{URL::to('/storage/icon.png')}}
                                data-prefill.name="{{Auth::user()->name}}"
                                data-prefill.contact="{{Auth::user()->phone}}"
                                data-prefill.email="{{Auth::user()->email}}"
                                data-theme.color="#f00">
                        </script>
                    </form>
                    <style>
                    .razorpay-payment-button{
                        background: #0033c7;
                        border: 1px solid #0033c7;
                        color:#fff;
                        font-size: 14px;
                        padding: 10px 30px;
                        border-radius: 4px;
                        font-family: 'Rubik', sans-serif;
                        letter-spacing: 1px;
                        font-weight: 500;
                        text-transform: uppercase;
                        transition: all 0.3s ease-in-out;
                        display: inline-block;
                        box-shadow: none !important;
                    }
                    </style>
