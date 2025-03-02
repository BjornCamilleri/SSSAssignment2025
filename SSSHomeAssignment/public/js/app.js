document.getElementById('filter_college_id').addEventListener('change', function () {
    let collegeId = this.value || this.options[this.selectedIndex].value
     window.location.href = window.location.href.split('?')[0] + '?college_id=' + collegeId
})

document.getElementById('sort').addEventListener('change', function () {
    let sort = this.value || this.options[this.selectedIndex].value;
    let collegeId = document.getElementById('filter_college_id').value;
    window.location.href = window.location.href.split('?')[0] + '?college_id=' + collegeId + '&sort=' + sort;
});