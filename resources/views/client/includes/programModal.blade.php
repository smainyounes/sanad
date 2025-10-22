<!-- نافذة حجز البرنامج -->
<div class="modal fade" id="reserveProgramModal" tabindex="-1" aria-labelledby="reserveProgramLabel" aria-hidden="true" dir="rtl">
    <div class="modal-dialog">
      <div class="modal-content rounded-3 shadow-lg">
        <div class="modal-header">
          <h5 class="modal-title" id="reserveProgramLabel">حجز برنامج</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
        </div>
  
        <div class="modal-body">
          <form id="programReservationForm">
            <input type="hidden" id="program_id" name="program_id">
  
            <div class="mb-3">
              <label for="program_note" class="form-label">ملاحظات (اختياري)</label>
              <textarea class="form-control text-end" id="program_note" name="note" rows="3" placeholder="اكتب ملاحظتك هنا..."></textarea>
            </div>
          </form>
        </div>
  
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
          <button type="button" class="btn btn-primary" id="reserveProgramBtn">تأكيد الحجز</button>
        </div>
      </div>
    </div>
  </div>
  