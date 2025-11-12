@if($specialistReservations->isEmpty())
    <div class="text-center text-muted py-4">لا توجد حجوزات مباشرة حالياً.</div>
@else
    @foreach($specialistReservations as $reservation)
        <div class="card mb-3 border-0 shadow-sm">
            <div class="card-body">
                <h5 class="text-primary mb-1">حجز مع الأخصائي: {{ $reservation->specialist->name ?? 'غير متوفر' }}</h5>
                <p class="mb-1"><strong>التاريخ:</strong> {{ $reservation->date }} - <strong>الوقت:</strong> {{ $reservation->time }}</p>

                @if(auth()->user()->type === 'specialist')
                    <p><strong>العميل:</strong> {{ $reservation->user->name ?? '' }}
                        @if(!empty($reservation->user->phone))
                            - <strong>الهاتف:</strong> {{ $reservation->user->phone }}
                        @endif
                    </p>
                @endif

                @if(!empty($reservation->note))
                    <p class="text-muted"><strong>ملاحظة:</strong> {{ $reservation->note }}</p>
                @endif

                <span class="badge
                    @if($reservation->status === 'pending') bg-warning text-dark
                    @elseif($reservation->status === 'confirmed') bg-success
                    @elseif($reservation->status === 'cancelled') bg-danger
                    @else bg-secondary
                    @endif">
                    حالة الحجز: 
                    @switch($reservation->status)
                        @case('pending') قيد الانتظار @break
                        @case('confirmed') مؤكد @break
                        @case('cancelled') ملغي @break
                        @default غير معروف
                    @endswitch
                </span>

                <div class="mt-3 text-end">
                    @if(auth()->user()->type !== 'specialist' && $reservation->status === 'pending')
                        <button class="btn btn-outline-danger btn-sm"
                            onclick="updateSpecialistReservation({{ $reservation->id }}, 'cancelled')">
                            إلغاء الحجز
                        </button>
                    @elseif(auth()->user()->type === 'specialist' && $reservation->status === 'pending')
                        <button class="btn btn-success btn-sm me-1"
                            onclick="updateSpecialistReservation({{ $reservation->id }}, 'confirmed')">
                            قبول
                        </button>
                        <button class="btn btn-outline-danger btn-sm"
                            onclick="updateSpecialistReservation({{ $reservation->id }}, 'cancelled')">
                            رفض
                        </button>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
@endif
