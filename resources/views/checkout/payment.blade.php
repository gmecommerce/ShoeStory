@extends("layouts.app")

@section("content")
    <div class="mx-5">
        <div class="mb-8">
            <h1 class="text-2xl font-bold">Checkout</h1>
            {{ Breadcrumbs::render('user.checkout.payment') }}
        </div>
        <div>
            <h2 class="sr-only">Steps</h2>

            <div class="mx-auto lg:w-2/5">
                <div class="overflow-hidden rounded-full bg-background-default-dark">
                    <div class="h-2 w-full rounded-full bg-primary"></div>
                </div>
                <ol class="mt-4 grid grid-cols-3 text-sm font-medium">
                    <li class="flex items-center justify-start sm:gap-1.5">
                        <span class="hidden text-primary sm:inline"><a href="{{route('user.checkout.cart')}}">Cart</a></span>

                        <svg class="icon icon-tabler icon-tabler-shopping-cart-check stroke-primary"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                            <path d="M11.5 17h-5.5v-14h-2" />
                            <path d="M6 5l14 1l-1 7h-13" />
                            <path d="M15 19l2 2l4 -4" />
                        </svg>
                    </li>

                    <li class="flex items-center justify-center sm:gap-1.5">
                        <span class="hidden text-primary sm:inline"><a href="{{route('user.checkout.shipping')}}">Address</a></span>

                        <svg class="icon icon-tabler icon-tabler-map-pin-check stroke-primary"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                            <path d="M11.87 21.48a1.992 1.992 0 0 1 -1.283 -.58l-4.244 -4.243a8 8 0 1 1 13.355 -3.474" />
                            <path d="M15 19l2 2l4 -4" />
                        </svg>
                    </li>

                    <li class="flex items-center justify-end sm:gap-1.5">
                        <span class="hidden text-primary sm:inline">Payment</span>

                        <svg class="size-6 sm:size-5 stroke-primary" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </li>
                </ol>
            </div>
        </div>

        <div class="mx-auto h-screen pt-12">
            <div class="container mx-auto">
                <form class="flex flex-col gap-12 lg:flex-row" action="{{ route("user.checkout.momoPayment") }}"
                    method="POST">
                    @csrf
                    <div class="rounded border border-divider lg:w-2/3 shadow-md bg-white">
                        <h1 class="my-4 px-4 text-2xl font-bold">Payment</h1>
                        <div class="p-4">
                            <!-- Payment Method -->
                            <div class="mb-6">
                                <div class="w-full rounded-md">
                                    <div class="flex flex-col gap-2">
                                        <label
                                            class="my-3 flex cursor-pointer gap-8 rounded-small border border-divider px-3 py-4 text-text-dark hover:bg-background-neutral-light">
                                            <input class="ml-2" name="payment_method" value="atm" type="radio" />
                                            <div class="pl-2">
                                                <p>Pay with Zalopay</p>
                                                <p class="text-text-light">
                                                    Pay with mobile banking application or e-Wallet
                                                </p>
                                            </div>
                                        </label>

                                        <label
                                            class="my-3 flex cursor-pointer gap-8 rounded-small border border-divider px-3 py-4 text-text-dark hover:bg-background-neutral-light">
                                            <input class="ml-2" name="payment_method" value="cod" type="radio"/>
                                            <div class="pl-2">
                                                <p>Cash on deliver</p>
                                                <p class="text-text-light">
                                                    Pay with mobile banking application or e-Wallet
                                                </p>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8 flex w-full justify-end">
                                <button
                                    class="rounded border bg-primary px-8 py-2 text-white hover:bg-primary-dark"
                                    type="submit">
                                    Place Order
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="rounded lg:w-1/3">
                        <!-- Address  -->
                        <div class="mb-10 rounded border bg-white p-4 shadow-md">
                            <h2 class="mb-4 text-2xl font-bold">Address</h2>
                            <div class="mb-1.5 flex justify-between">
                                <p>{{$shipping['first_name'] . ' ' .$shipping['last_name']}}</p>
                            </div>
                            <div class="mb-1.5 flex justify-between">
                                <p>{{$shipping['address']}}</p>
                            </div>
                            <div class="mb-1.5 flex justify-between">
                                <span>{{$shipping['ward'] . ', ' . $shipping['district'] . ', ' . $shipping['city']}}</span>
                            </div>
                            <div class="mb-1.5 flex justify-between">
                                <span>{{$shipping['phone_number']}}</span>
                            </div>
                        </div>

                        <!-- Order Summary  -->
                        <div class="rounded border bg-white p-4 shadow-md">
                            <h2 class="mb-4 text-2xl font-bold">Order Summary</h2>
                            <div class="mb-2 flex justify-between">
                                <span class="text-text-light">Subtotal</span>
                                <span>{{ number_format($cart->total) }}₫</span>
                            </div>
                            <div class="mb-2 flex justify-between">
                                <span class="text-text-light">Shipping</span>
                                <span>0₫</span>
                            </div>
                            <hr class="my-2" />
                            <div class="mb-2 flex justify-between">
                                <span class="font-semibold">Total Price</span>
                                <span class="font-semibold text-error">{{ number_format($cart->total) }}₫</span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
