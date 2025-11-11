<!-- نافذة حجز الأخصائي -->
<div class="modal fade" id="reserveSpecialistModal" tabindex="-1" aria-labelledby="reserveSpecialistLabel" aria-hidden="true" dir="rtl">
    <div class="modal-dialog">
      <div class="modal-content rounded-3 shadow-lg">
        <div class="modal-header">
          <h5 class="modal-title" id="reserveSpecialistLabel">حجز موعد مع الأخصائي</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
        </div>
  
        <div class="modal-body">
          <form id="specialistReservationForm">
            <input type="hidden" id="specialist_id" name="specialist_id">
  
            <div class="mb-3">
              <label for="reservation_date" class="form-label">التاريخ</label>
              <input type="date" class="form-control" id="reservation_date" name="date" required>
            </div>
  
            <div class="mb-3">
              <label for="reservation_time" class="form-label">الوقت</label>
              <input type="time" class="form-control" id="reservation_time" name="time" required>
            </div>
  
            <div class="mb-3">
              <label for="reservation_note" class="form-label">ملاحظات (اختياري)</label>
              <textarea class="form-control" id="reservation_note" name="note" rows="3" placeholder="اكتب ملاحظتك هنا..."></textarea>
            </div>
          </form>
        </div>
  
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
          <button type="button" class="btn btn-primary" id="reserveSpecialistBtn">تأكيد الحجز</button>
        </div>
      </div>
    </div>
  </div>
  