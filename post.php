﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>مرکز دانلود کتابهای الکترونیکی</title>
    <link href="styles.css" rel="stylesheet" />
    <script src="javascript.js"></script>
</head>
<body>
    <div id="wrapper">
        <header id="top">
            <ul>
                <li><span><a href="./" style="font-family:sans-serif;margin-left:40px;margin-right:20px;color:#CCC">arDaei.com</a></span></li>
                <li><img src="images/logo.png" /></li>
                <li><span>مرکز دانلود کتابهای الکترونیکی</span></li>
            </ul>
        </header>
        <nav id="menu">
            <ul>
                <li><a href="./">صفحه‌ اصلی</a></li>
                <li><a href="./?action=signup">ثبت نام</a></li>
                <li><a href="./?page=12">تماس با ما</a></li>
                <li><a href="./?page=11">درباره ما</a></li>
            </ul>
        </nav>
        <div id="body">
            <aside id="sidebar">
                <section id="login">
                    <header>
                        ورود
                    </header>
                    <div>
                        <form method="post" action="./?action=login">
                            <table>
                                <tr>
                                    <td>
                                        نام کاربری
                                    </td>
                                    <td>
                                        <input type="text" name="user" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        کلمه عبور
                                    </td>
                                    <td>
                                        <input type="password" name="pass" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        مرا به خاطر بسپار
                                        <input type="checkbox" name="remember" value="yes" />
                                        <input type="submit" value="ورود" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <a href="./?action=signup" class="linkbutton">ثبت نام</a>
                                        <a href="./?action=forget" class="linkbutton">فراموشی کلمه عبور</a>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </section>
                <section id="search">
                    <header>
                        جستجو
                    </header>
                    <div>
                        <form>
                            <input type="hidden" name="action" value="search" />
                            <input type="search" name="q" placeholder="جستجو کنید" />
                            <input type="submit" value="جستجو در" />
                            <input type="checkbox" name="title" value="yes" checked="checked" /> عنوان
                            <input type="checkbox" name="content" value="yes" checked="checked" /> توضیحات
                        </form>
                    </div>
                </section>
                <section id="categories">
                    <header>
                        گروه‌ها
                    </header>
                    <div>
                        <ul>
                            <li>
                                <a href="./?cat=1">علوم پایه</a>
                                <ul>
                                    <li><a href="./?cat=7">فیزیک</a></li>
                                    <li><a href="./?cat=8">ریاضیات</a></li>
                                    <li><a href="./?cat=9">شیمی</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="./?cat=2">فنی و مهندسی</a>
                                <ul>
                                    <li><a href="./?cat=10">مهندسی برق</a></li>
                                    <li><a href="./?cat=11">مهندسی کامپیوتر</a></li>
                                    <li><a href="./?cat=12">مهندسی مکانیک</a></li>
                                    <li><a href="./?cat=13">مهندسی عمران</a></li>
                                    <li><a href="./?cat=14">مهندسی معدن</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="./?cat=3">علوم انسانی</a>
                                <ul>
                                    <li><a href="./?cat=15">حقوق</a></li>
                                    <li><a href="./?cat=16">روانشناسی</a></li>
                                    <li><a href="./?cat=17">الهیات</a></li>
                                    <li><a href="./?cat=18">جامعه شناسی</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="./?cat=4">پزشکی</a>
                                <ul>
                                    <li><a href="./?cat=19">قلب و عروق</a></li>
                                    <li><a href="./?cat=20">دهان و دندان</a></li>
                                    <li><a href="./?cat=21">زنان و زایمان</a></li>
                                    <li><a href="./?cat=22">طب سنتی</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="./?cat=5">هنر</a>
                                <ul>
                                    <li><a href="./?cat=23">تئاتر</a></li>
                                    <li><a href="./?cat=24">نقاشی</a></li>
                                    <li><a href="./?cat=25">مینیاتور</a></li>
                                    <li><a href="./?cat=26">صنایع دستی</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="./?cat=6">ادبیات</a>
                                <ul>
                                    <li><a href="./?cat=27">دیوان اشعار</a></li>
                                    <li><a href="./?cat=28">دستور زبان</a></li>
                                    <li><a href="./?cat=29">تاریخ ادبیات</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </section>
                <section id="lastposts">
                    <header>
                        آخرین مطالب
                    </header>
                    <div>
                        <ul>
                            <li>
                                <a href="./?post=13">مطلب شماره 11</a>
                            </li>
                            <li>
                                <a href="./?post=10">پست آزمایشی شماره 10 </a>
                            </li>
                            <li>
                                <a href="./?post=9">پست آزمایشی شماره 9 </a>
                            </li>
                            <li>
                                <a href="./?post=8">پست آزمایشی شماره 8 </a>
                            </li>
                            <li>
                                <a href="./?post=7">پست آزمایشی شماره 7 </a>
                            </li>
                            <li>
                                <a href="./?post=6">پست آزمایشی شماره 6 </a>
                            </li>
                            <li>
                                <a href="./?post=5">پست آزمایشی شماره 5 </a>
                            </li>
                            <li>
                                <a href="./?post=4">پست آزمایشی شماره 4</a>
                            </li>
                            <li>
                                <a href="./?post=3">پست آزمایشی شماره 3</a>
                            </li>
                            <li>
                                <a href="./?post=2">پست آزمایشی شماره 2</a>
                            </li>
                        </ul>
                    </div>
                </section>
            </aside>
            <section id="content">
                <article>
                    <header class="postheader">
                        <h2><a href="./?post=13">مطلب شماره 11</a></h2>
                        <p>
                            نوشته شده در 30 شهریور 1398 در ساعت 13:18 98سط امیررضا داعی در گروه :                     <a href="./?cat=8">ریاضیات</a>
                            <a href="./?cat=12">مهندسی مکانیک</a>
                        </p>
                    </header>
                    <div class="postbody">
                        <p>مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11</p>

                        <p>مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11</p>

                        <p>مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11</p>

                        <p></p>

                        <p>مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11</p>

                        <p>مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11</p>

                        <p>مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11مطلب شماره 11</p>
                    </div>
                    <div id="download">
                        <span>
                            برای مشاهده لینک ها باید عضو شوید. برای ثبت نام
                            <a href="./?action=signup">اینجا</a> و برای ورود <a href="./?action=login">اینجا</a> کلیک کنید.
                        </span>
                    </div>
                    <div class="postseperator"></div>
                </article>
                <div id="comments">
                    <article>
                        <header>
                            <p>حسن گفته :</p>
                            <time>در 29 شهریور 1398 19:59</time>
                        </header>
                        <div class="commentbody">
                            سلام<br />
                            این یک این یک دیدگاه آزمایشی است.<br />
                            این یک این یک دیدگاه آزمایشی است.<br />
                            این یک این یک دیدگاه آزمایشی است.<br />
                            این یک این یک دیدگاه آزمایشی است.<br />
                            این یک این یک دیدگاه آزمایشی است.
                        </div>
                        <footer class="commentfooter">
                            <span onclick="changeAnswer(1,'حسن');">پاسخ دهید</span>
                        </footer>
                    </article>
                    <article class="answer">
                        <header>
                            <p>شایان در پاسخ به علی گفته :</p>
                            <time>در 29 شهریور 1398 ساعت 19:59</time>
                        </header>
                        <div class="commentbody">
                            سلام<br />
                            این یک این یک پاسخ آزمایشی است.<br />
                            این یک این یک پاسخ آزمایشی است.<br />
                            این یک این یک پاسخ آزمایشی است.<br />
                            این یک این یک پاسخ آزمایشی است.<br />
                            این یک این یک پاسخ آزمایشی است.
                        </div>
                        <footer class="commentfooter">
                            <span onclick="changeAnswer(2,'شایان');">پاسخ دهید</span>
                        </footer>
                    </article>
                    <article>
                        <header>
                            <p>امیر گفته :</p>
                            <time>در 29 شهریور 1398 ساعت 20:00</time>
                        </header>
                        <div class="commentbody">
                            سلام<br />
                            این یک این یک دیدگاه آزمایشی است.<br />
                            این یک این یک دیدگاه آزمایشی است.<br />
                            این یک این یک دیدگاه آزمایشی است.<br />
                            این یک این یک دیدگاه آزمایشی است.<br />
                            این یک این یک دیدگاه آزمایشی است.
                        </div>
                        <footer class="commentfooter">
                            <span onclick="changeAnswer(3,'امیر');">پاسخ دهید</span>
                        </footer>
                    </article>
                </div>
                <form method="post" id="sendcomment">
                    <p id="commenttitle">
                        دیدگاه خود را در مورد این مطلب بنویسید.
                    </p>
                    <table>
                        <tr>
                            <td width="130">نام :</td>
                            <td>
                                <input type="text" name="fullname" class="inputright" required />
                            </td>
                        </tr>
                        <tr>
                            <td>ایمیل :</td>
                            <td>
                                <input type="email" name="email" class="inputleft" />
                            </td>
                        </tr>
                        <tr>
                            <td>وب سایت</td>
                            <td>
                                <input type="text" name="website" class="inputleft" />
                            </td>
                        </tr>
                        <tr>
                            <td>دیدگاه :</td>
                            <td>
                                <textarea name="comment"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" value="ارسال" />
                            </td>
                        </tr>
                    </table>
                    <input type="hidden" name="answerid" value="0" id="answerid" />
                </form>
            </section>
        </div>
        <footer id="bottom">
            <p>
                © تمامی حقوق برای <strong style="font-family:sans-serif;">arDaei</strong> محفوظ می باشد.
            </p>
        </footer>
    </div>
</body>
</html>