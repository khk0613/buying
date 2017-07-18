<h2>CONTACT</h2>
<p class="head-ex">BUYINGに気になる点をお問い合わせください。</p>
<div class="box-form">
    <form autocomplete="off" action="PHPMailer-master/send_mail.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="<?=$token?>">
        <table>
            <tr>
                <td>
                    <input type="text" name="name" id="" placeholder="NAME">
                    <input type="email" name="email" id="" placeholder="EMAIL">
                    <p class="ex">お問い合わせ頂くサービスを選択してください。（複数選択可）</p>
                    <table>
                        <tr>
                            <td>
                                <input type="checkbox" name="category" id="cate0" value="エレベーター保守"><label for="cate0">エレベーター保守</label>
                            </td>
                            <td>
                                <input type="checkbox" name="category" id="cate1" value="電気料金削減"><label for="cate1">電気料金削減</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="category" id="cate2" value="食材共同購買"><label for="cate2">食材共同購買</label>
                            </td>
                            <td>
                                <input type="checkbox" name="category" id="cate3" value="ガソリン代削減"><label for="cate3">ガソリン代削減</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="category" id="cate4" value="ETC"><label for="cate4">ETC</label>
                            </td>
                            <td>
                                <input type="checkbox" name="category" id="cate5" value="コンシェルジュ派遣"><label for="cate5">コンシェルジュ派遣</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="category" id="cate6" value="保育園幼稚園向けコスト削減"><label for="cate6">保育園幼稚園向けコスト削減</label>
                            </td>
                            <td>
                                <input type="checkbox" name="category" id="cate7" value="介護施設向けコスト削減"><label for="cate7">介護施設向けコスト削減</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="category" id="cate8" value="税務サービス"><label for="cate8">税務サービス</label>
                            </td>
                            <td>
                                <input type="checkbox" name="category" id="cate9" value="販管費削減サービス"><label for="cate9">販管費削減サービス</label>
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <textarea name="content" id="" cols="30" rows="10" placeholder="MESSAGE"></textarea>
                    <button type="submit">SEND</button>
                </td>
            </tr>
        </table>
    </form>    
</div>