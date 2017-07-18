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
                                <input type="checkbox" name="category" id="cate18" value="エレベーター保守"><label for="cate18">エレベーター保守</label>
                            </td>
                            <td>
                                <input type="checkbox" name="category" id="cate19" value="電気料金削減"><label for="cate19">電気料金削減</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="category" id="cate10" value="食材共同購買"><label for="cate10">食材共同購買</label>
                            </td>
                            <td>
                                <input type="checkbox" name="category" id="cate11" value="ガソリン代削減"><label for="cate11">ガソリン代削減</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="category" id="cate12" value="ETC"><label for="cate12">ETC</label>
                            </td>
                            <td>
                                <input type="checkbox" name="category" id="cate13" value="コンシェルジュ派遣"><label for="cate13">コンシェルジュ派遣</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="category" id="cate14" value="保育園幼稚園向けコスト削減"><label for="cate14">保育園幼稚園向けコスト削減</label>
                            </td>
                            <td>
                                <input type="checkbox" name="category" id="cate15" value="介護施設向けコスト削減"><label for="cate15">介護施設向けコスト削減</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="category" id="cate16" value="税務サービス"><label for="cate16">税務サービス</label>
                            </td>
                            <td>
                                <input type="checkbox" name="category" id="cate17" value="販管費削減サービス"><label for="cate17">販管費削減サービス</label>
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