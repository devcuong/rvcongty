<?php
require 'mvc/class/CutString.php';

class Test extends Controller
{
    public function Index()
    {
        $stringMom = "Pros:- Không có người giỏi nên bạn chỉ cần ko quá dốt là có thể leo lên vị trí...nhân viên lâu năm- Công việc không có áp lực- Bạn muốn làm gì trong giờ làm việc cũng được, vì chẳng ai rảnh mà xem bạn làm gì- Không bị chặn internet như Fsoft, vào xvi**** cũng thoải cmn mái- Không bị ép tiến độ(vì đằng nào cũng phải OT sấp mặt)- Hay được đi nhậu- Hay có drama cho các thím thích hóng hớt- Gái tạm được và có vẻ dễ dãi(một số, ko nhiều)Cons:- Đéo phát triển được gì vì đéo ai quan tâm đến bạn- Dự án khá lởm khởm, cả cty có hơn chục dự án thì có lẽ đc khoảng 1-2 cái để bạn có thể cho vào CV- Tỷ lệ thực tập sinh, fresher chiếm tới 40-50%, nên nếu là mid/senior thì khả năng bạn phải gánh tạ là ko hề nhỏ- Hầu hết PMs ko có kỹ năng quản lý, chỉ... Xem thêm làm theo cảm tính- Chế độ khá tệ, BH cơ bản, đi muộn trừ lương, lễ tết ko có thưởng hoặc thưởng rất ít- Tăng lương cho có, thậm chí không tăng lương trong khi lương khởi điểm thấp(mặt bằng chung bằng ~60-70% so với Fsoft), thực tập ko có chế độ gì------Conclusion- Phù hợp với các bạn sinh viên mới ra trường hoặc có xuất phát điểm thấp, chưa tự tin vào khả năng của mình và ko/ít quan tâm đến chế độ, phúc lợi. Nói phù hợp bản các bạn sẽ dễ dàng pass, tuy nhiên cũng nên cân nhắc bởi cty ko có kế hoạch đào tạo bài bản, bạn phải chủ động bơi và học hỏi trong quá trình thực tập, làm việc. Nếu để chọn thì Fsoft vẫn ổn hơn.- Các bạn có kinh nghiệm nhưng tự đánh giá năng lực mình ở mức bình thường, thì có thể cân nhắc và appy vào đây, vì pv khá dễ. Tuy nhiên hãy mạnh dạn deal mức lương cao một chút, lý do thì đã nêu ở mục Cons.- Các bạn có năng lực thì mình khuyên thật là né gấp, công ty này ko phù hợp vói các bạn đâu- Tuyệt đối đừng tin những reviews khen ở trên này, muốn biết sự thật hãy lên LinkedIn tìm những người đã/đang làm ở đây mà hỏi xem có ai khen được không :)) .see-more__expand { display: none; } (() => { const seeMoreBtn = document.querySelector('#review_5e0994435d741144d98b06e8 .see-more__btn') const dots = document.querySelector('#review_5e0994435d741144d98b06e8 .see-more__dots') const expandedContent = document.querySelector('#review_5e0994435d741144d98b06e8 .see-more__expand') if (seeMoreBtn) { seeMoreBtn.addEventListener('click', () => { dots.style.display = 'none' seeMoreBtn.style.display = 'none' expandedContent.style.display = 'inline' }) } })()";
        $stringSearch = ".see-more__expand";
        $cutString = new CutString();
        $from = $cutString->search_string($stringSearch, $stringMom);
        $to = strlen($stringMom);
        //echo $from;
        echo substr($stringMom,0,intval($from));
    }
}
?>