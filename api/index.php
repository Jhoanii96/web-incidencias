<?php

//require __DIR__ . '/../index.php';

<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Iniciar de sesión | USI</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="/web-incidencias/src/assets/media/image/usi-image_icon.png">
    <link rel="stylesheet" href="/web-incidencias/src/css/bootstrap.min.css">
    <link rel="stylesheet" href="/web-incidencias/src/css/font-awesome.min.css">
    <link rel="stylesheet" href="/web-incidencias/src/css/ionicons.min.css">
    <link rel="stylesheet" href="/web-incidencias/src/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/web-incidencias/src/css/blue.css">
    <link rel="stylesheet" href="/web-incidencias/src/css/transition.css">
        <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            color: white;
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style>.ZFfasc5f5NTIdwkMzNMy .zhhsfrubRJBf86cRcjeS {
  height: 32px;
  font-size: 16px;
  font-weight: bold;
  color: rgba(0, 0, 0, 0.88);
  line-height: 32px;
}
.ZFfasc5f5NTIdwkMzNMy .TiFcRFnjGcRWQCxcglYv {
  position: relative;
}
.ZFfasc5f5NTIdwkMzNMy .TiFcRFnjGcRWQCxcglYv select {
  width: 100%;
  height: 32px;
  border-radius: 6px;
  opacity: 0.5;
  border: 1px solid #000000;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  padding: 0 12px;
  padding-right: 30px;
}
.ZFfasc5f5NTIdwkMzNMy .TiFcRFnjGcRWQCxcglYv select:focus-visible {
  outline: none;
  border: 1px solid #000000;
}
.ZFfasc5f5NTIdwkMzNMy .TiFcRFnjGcRWQCxcglYv:after {
  content: "";
  display: block;
  width: 0;
  height: 0;
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  border-top: 4px solid rgba(0, 0, 0, 0.5);
  position: absolute;
  top: 50%;
  right: 15px;
  transform: translateY(-50%);
}
.ZFfasc5f5NTIdwkMzNMy .TiFcRFnjGcRWQCxcglYv:focus-visible {
  border: none;
  background: salmon;
}
.rxQr7drg0GrqV8vmOncn {
  display: flex;
  justify-content: space-between;
  margin-bottom: 24px;
}
.M2gRdCRtGXZfWo_K9lvd {
  display: flex;
  flex-direction: column;
}
.M2gRdCRtGXZfWo_K9lvd .zhhsfrubRJBf86cRcjeS {
  font-family: OpenSans-Regular, OpenSans;
  font-weight: 600;
  font-size: 14px;
  color: rgba(0, 0, 0, 0.88);
  line-height: 16px;
}

/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL3NyYy92aWV3cy9jb21wb25lbnRzL1NlbGVjdC9zZWxlY3QubW9kdWxlLmxlc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFFSSxZQUFBO0VBQ0EsZUFBQTtFQUNBLGlCQUFBO0VBQ0EsMEJBQUE7RUFDQSxpQkFBQTtBQUFKO0FBTkE7RUFVSSxrQkFBQTtBQURKO0FBVEE7RUFZTSxXQUFBO0VBQ0EsWUFBQTtFQUNBLGtCQUFBO0VBQ0EsWUFBQTtFQUNBLHlCQUFBO0VBRUEsZ0JBQUE7RUFDQSx1QkFBQTtFQUNBLG1CQUFBO0VBR0Esd0JBQUE7RUFDQSxxQkFBQTtFQUNBLGdCQUFBO0VBRUEsZUFBQTtFQUNBLG1CQUFBO0FBSk47QUF4QkE7RUFnQ00sYUFBQTtFQUNBLHlCQUFBO0FBTE47QUE1QkE7RUFxQ0ksV0FBQTtFQUNBLGNBQUE7RUFFQSxRQUFBO0VBQ0EsU0FBQTtFQUNBLGtDQUFBO0VBQ0EsbUNBQUE7RUFDQSx3Q0FBQTtFQUVBLGtCQUFBO0VBQ0EsUUFBQTtFQUNBLFdBQUE7RUFDQSwyQkFBQTtBQVJKO0FBekNBO0VBcURJLFlBQUE7RUFDQSxrQkFBQTtBQVRKO0FBYUE7RUFDRSxhQUFBO0VBQ0EsOEJBQUE7RUFDQSxtQkFBQTtBQVhGO0FBa0JBO0VBQ0UsYUFBQTtFQUNBLHNCQUFBO0FBaEJGO0FBY0E7RUFJSSx1Q0FBQTtFQUNBLGdCQUFBO0VBQ0EsZUFBQTtFQUNBLDBCQUFBO0VBQ0EsaUJBQUE7QUFmSiIsInNvdXJjZXNDb250ZW50IjpbIi5pdGVtIHtcbiAgLm5hbWUge1xuICAgIGhlaWdodDogMzJweDtcbiAgICBmb250LXNpemU6IDE2cHg7XG4gICAgZm9udC13ZWlnaHQ6IGJvbGQ7XG4gICAgY29sb3I6IHJnYmEoMCwgMCwgMCwgMC44OCk7XG4gICAgbGluZS1oZWlnaHQ6IDMycHg7XG4gIH1cblxuICAuc2VsZWN0IHtcbiAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gICAgc2VsZWN0IHtcbiAgICAgIHdpZHRoOiAxMDAlO1xuICAgICAgaGVpZ2h0OiAzMnB4O1xuICAgICAgYm9yZGVyLXJhZGl1czogNnB4O1xuICAgICAgb3BhY2l0eTogMC41O1xuICAgICAgYm9yZGVyOiAxcHggc29saWQgIzAwMDAwMDtcblxuICAgICAgb3ZlcmZsb3c6IGhpZGRlbjtcbiAgICAgIHRleHQtb3ZlcmZsb3c6IGVsbGlwc2lzO1xuICAgICAgd2hpdGUtc3BhY2U6IG5vd3JhcDtcblxuICAgICAgLy8g5Y675o6J5LiL5ouJ6buY6K6kaWNvblxuICAgICAgLXdlYmtpdC1hcHBlYXJhbmNlOiBub25lO1xuICAgICAgLW1vei1hcHBlYXJhbmNlOiBub25lO1xuICAgICAgYXBwZWFyYW5jZTogbm9uZTtcblxuICAgICAgcGFkZGluZzogMCAxMnB4O1xuICAgICAgcGFkZGluZy1yaWdodDogMzBweDtcbiAgICB9XG5cbiAgICBzZWxlY3Q6Zm9jdXMtdmlzaWJsZSB7XG4gICAgICBvdXRsaW5lOiBub25lO1xuICAgICAgYm9yZGVyOiAxcHggc29saWQgIzAwMDAwMDtcbiAgICB9XG4gIH1cbiAgLnNlbGVjdDphZnRlciB7XG4gICAgY29udGVudDogXCJcIjtcbiAgICBkaXNwbGF5OiBibG9jaztcblxuICAgIHdpZHRoOiAwO1xuICAgIGhlaWdodDogMDtcbiAgICBib3JkZXItbGVmdDogNHB4IHNvbGlkIHRyYW5zcGFyZW50O1xuICAgIGJvcmRlci1yaWdodDogNHB4IHNvbGlkIHRyYW5zcGFyZW50O1xuICAgIGJvcmRlci10b3A6IDRweCBzb2xpZCByZ2JhKDAsIDAsIDAsIDAuNSk7XG5cbiAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgdG9wOiA1MCU7XG4gICAgcmlnaHQ6IDE1cHg7XG4gICAgdHJhbnNmb3JtOiB0cmFuc2xhdGVZKC01MCUpO1xuICB9XG5cbiAgLnNlbGVjdDpmb2N1cy12aXNpYmxlIHtcbiAgICBib3JkZXI6IG5vbmU7XG4gICAgYmFja2dyb3VuZDogc2FsbW9uO1xuICB9XG59XG5cbi5hY3Jvc3Mge1xuICBkaXNwbGF5OiBmbGV4O1xuICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWJldHdlZW47XG4gIG1hcmdpbi1ib3R0b206IDI0cHg7XG5cbiAgLnNlbGVjdCB7XG4gICAgc2VsZWN0IHtcbiAgICB9XG4gIH1cbn1cbi52ZXJ0aWNhbCB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gIC5uYW1lIHtcbiAgICBmb250LWZhbWlseTogT3BlblNhbnMtUmVndWxhciwgT3BlblNhbnM7XG4gICAgZm9udC13ZWlnaHQ6IDYwMDtcbiAgICBmb250LXNpemU6IDE0cHg7XG4gICAgY29sb3I6IHJnYmEoMCwgMCwgMCwgMC44OCk7XG4gICAgbGluZS1oZWlnaHQ6IDE2cHg7XG4gICAgLy8gbWFyZ2luLWJvdHRvbTogMTZweDtcbiAgfVxuICAuc2VsZWN0IHtcbiAgICBzZWxlY3Qge1xuICAgIH1cbiAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ== */</style><style>.IRoWVNnxMESYzrLAb1jW {
  width: 100%;
  height: 48px;
  border-radius: 12px;
  opacity: 0.5;
  border: 1px solid #000000;
  padding: 0 16px;
  box-sizing: border-box;
  font-size: 14px;
  font-family: OpenSans-Regular, OpenSans;
  font-weight: 400;
}
.IRoWVNnxMESYzrLAb1jW:focus-visible {
  outline: none;
}

/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL3NyYy92aWV3cy9jb21wb25lbnRzL0lucHV0L2lucHV0Lm1vZHVsZS5sZXNzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0UsV0FBQTtFQUNBLFlBQUE7RUFDQSxtQkFBQTtFQUNBLFlBQUE7RUFDQSx5QkFBQTtFQUNBLGVBQUE7RUFDQSxzQkFBQTtFQUVBLGVBQUE7RUFDQSx1Q0FBQTtFQUNBLGdCQUFBO0FBQUY7QUFFRTtFQUNFLGFBQUE7QUFBSiIsInNvdXJjZXNDb250ZW50IjpbIi5pbnB1dCB7XG4gIHdpZHRoOiAxMDAlO1xuICBoZWlnaHQ6IDQ4cHg7XG4gIGJvcmRlci1yYWRpdXM6IDEycHg7XG4gIG9wYWNpdHk6IDAuNTtcbiAgYm9yZGVyOiAxcHggc29saWQgIzAwMDAwMDtcbiAgcGFkZGluZzogMCAxNnB4O1xuICBib3gtc2l6aW5nOiBib3JkZXItYm94O1xuXG4gIGZvbnQtc2l6ZTogMTRweDtcbiAgZm9udC1mYW1pbHk6IE9wZW5TYW5zLVJlZ3VsYXIsIE9wZW5TYW5zO1xuICBmb250LXdlaWdodDogNDAwO1xuXG4gICY6Zm9jdXMtdmlzaWJsZSB7XG4gICAgb3V0bGluZTogbm9uZTtcbiAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ== */</style><style>.Ib6CUk9NvPeuYdBNTyjg {
  display: flex;
  align-items: flex-start;
}
.Ib6CUk9NvPeuYdBNTyjg input[type="radio"] {
  appearance: none;
  width: 24px;
  height: 24px;
  border-radius: 50%;
  border: 2px solid #ccc;
  position: relative;
}
.Ib6CUk9NvPeuYdBNTyjg input[type="radio"]:checked {
  border-color: #ff8f00;
}
.Ib6CUk9NvPeuYdBNTyjg input[type="radio"]:checked::after {
  content: "";
  width: 10px;
  height: 10px;
  background: #ff8f00;
  border-radius: 50%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.Ib6CUk9NvPeuYdBNTyjg label {
  flex: 1;
  cursor: pointer;
  margin-left: 32px;
  font-size: 14px;
  font-family: OpenSans-Regular, OpenSans;
  font-weight: 400;
  color: rgba(0, 0, 0, 0.88);
  line-height: 24px;
}

/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL3NyYy92aWV3cy9jb21wb25lbnRzL1JhZGlvL3JhZGlvLm1vZHVsZS5sZXNzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0UsYUFBQTtFQUNBLHVCQUFBO0FBQ0Y7QUFIQTtFQUlJLGdCQUFBO0VBQ0EsV0FBQTtFQUNBLFlBQUE7RUFDQSxrQkFBQTtFQUNBLHNCQUFBO0VBQ0Esa0JBQUE7QUFFSjtBQVhBO0VBYUkscUJBQUE7QUFDSjtBQWRBO0VBaUJJLFdBQUE7RUFDQSxXQUFBO0VBQ0EsWUFBQTtFQUNBLG1CQUFBO0VBQ0Esa0JBQUE7RUFDQSxrQkFBQTtFQUNBLFFBQUE7RUFDQSxTQUFBO0VBQ0EsZ0NBQUE7QUFBSjtBQXpCQTtFQTZCSSxPQUFBO0VBQ0EsZUFBQTtFQUNBLGlCQUFBO0VBRUEsZUFBQTtFQUNBLHVDQUFBO0VBQ0EsZ0JBQUE7RUFDQSwwQkFBQTtFQUNBLGlCQUFBO0FBRkoiLCJzb3VyY2VzQ29udGVudCI6WyIucmFkaW8ge1xuICBkaXNwbGF5OiBmbGV4O1xuICBhbGlnbi1pdGVtczogZmxleC1zdGFydDtcbiAgaW5wdXRbdHlwZT1cInJhZGlvXCJdIHtcbiAgICBhcHBlYXJhbmNlOiBub25lO1xuICAgIHdpZHRoOiAyNHB4O1xuICAgIGhlaWdodDogMjRweDtcbiAgICBib3JkZXItcmFkaXVzOiA1MCU7XG4gICAgYm9yZGVyOiAycHggc29saWQgI2NjYztcbiAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIH1cblxuICBpbnB1dFt0eXBlPVwicmFkaW9cIl06Y2hlY2tlZCB7XG4gICAgYm9yZGVyLWNvbG9yOiAjZmY4ZjAwO1xuICB9XG5cbiAgaW5wdXRbdHlwZT1cInJhZGlvXCJdOmNoZWNrZWQ6OmFmdGVyIHtcbiAgICBjb250ZW50OiBcIlwiO1xuICAgIHdpZHRoOiAxMHB4O1xuICAgIGhlaWdodDogMTBweDtcbiAgICBiYWNrZ3JvdW5kOiAjZmY4ZjAwO1xuICAgIGJvcmRlci1yYWRpdXM6IDUwJTtcbiAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgdG9wOiA1MCU7XG4gICAgbGVmdDogNTAlO1xuICAgIHRyYW5zZm9ybTogdHJhbnNsYXRlKC01MCUsIC01MCUpO1xuICB9XG5cbiAgbGFiZWwge1xuICAgIGZsZXg6IDE7XG4gICAgY3Vyc29yOiBwb2ludGVyO1xuICAgIG1hcmdpbi1sZWZ0OiAzMnB4O1xuXG4gICAgZm9udC1zaXplOiAxNHB4O1xuICAgIGZvbnQtZmFtaWx5OiBPcGVuU2Fucy1SZWd1bGFyLCBPcGVuU2FucztcbiAgICBmb250LXdlaWdodDogNDAwO1xuICAgIGNvbG9yOiByZ2JhKDAsIDAsIDAsIDAuODgpO1xuICAgIGxpbmUtaGVpZ2h0OiAyNHB4O1xuICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9 */</style><style>.c9sddWo_i7vCT4SyyItq {
  width: 100%;
  height: 100%;
  background: #ff8f00;
  position: relative;
  box-shadow: 0px 5px 5px -3px rgba(0, 0, 0, 0.08), 0px 3px 14px 2px rgba(0, 0, 0, 0.04), 0px 8px 10px 1px rgba(0, 0, 0, 0.06);
  border-radius: 8px;
  border: none;
  font-size: 16px;
  font-family: OpenSans-Bold, OpenSans;
  font-weight: bold;
  color: #ffffff;
  overflow: hidden;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  /* 禁用状态的样式 */
}
.c9sddWo_i7vCT4SyyItq:disabled {
  background: #c2c2c2 !important;
  /* 更淡的背景色表示不可点击 */
  color: #eceff1;
  /* 淡色文字 */
  cursor: not-allowed;
  /* 禁用光标 */
  box-shadow: none;
  /* 去除阴影 */
}

/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL3NyYy92aWV3cy9jb21wb25lbnRzL0J1dHRvbi9idXR0b24ubW9kdWxlLmxlc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFDRSxXQUFBO0VBQ0EsWUFBQTtFQUNBLG1CQUFBO0VBQ0Esa0JBQUE7RUFDQSw0SEFBQTtFQUVBLGtCQUFBO0VBQ0EsWUFBQTtFQUNBLGVBQUE7RUFDQSxvQ0FBQTtFQUNBLGlCQUFBO0VBQ0EsY0FBQTtFQUNBLGdCQUFBO0VBQ0EsZUFBQTtFQUVBLGFBQUE7RUFDQSxtQkFBQTtFQUNBLHVCQUFBO0VBREEsWUFBWTtBQUNkO0FBR0U7RUFDRSw4QkFBQTtFQURGLGlCQUFpQjtFQUVmLGNBQUE7RUFBRixTQUFTO0VBQ1AsbUJBQUE7RUFDRixTQUFTO0VBQVAsZ0JBQUE7RUFFRixTQUFTO0FBQ1giLCJzb3VyY2VzQ29udGVudCI6WyIuYnV0dG9uIHtcbiAgd2lkdGg6IDEwMCU7XG4gIGhlaWdodDogMTAwJTtcbiAgYmFja2dyb3VuZDogI2ZmOGYwMDtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICBib3gtc2hhZG93OiAwcHggNXB4IDVweCAtM3B4IHJnYmEoMCwgMCwgMCwgMC4wOCksXG4gICAgMHB4IDNweCAxNHB4IDJweCByZ2JhKDAsIDAsIDAsIDAuMDQpLCAwcHggOHB4IDEwcHggMXB4IHJnYmEoMCwgMCwgMCwgMC4wNik7XG4gIGJvcmRlci1yYWRpdXM6IDhweDtcbiAgYm9yZGVyOiBub25lO1xuICBmb250LXNpemU6IDE2cHg7XG4gIGZvbnQtZmFtaWx5OiBPcGVuU2Fucy1Cb2xkLCBPcGVuU2FucztcbiAgZm9udC13ZWlnaHQ6IGJvbGQ7XG4gIGNvbG9yOiAjZmZmZmZmO1xuICBvdmVyZmxvdzogaGlkZGVuO1xuICBjdXJzb3I6IHBvaW50ZXI7XG5cbiAgZGlzcGxheTogZmxleDtcbiAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAganVzdGlmeS1jb250ZW50OiBjZW50ZXI7XG5cbiAgLyog56aB55So54q25oCB55qE5qC35byPICovXG4gICY6ZGlzYWJsZWQge1xuICAgIGJhY2tncm91bmQ6ICNjMmMyYzIgIWltcG9ydGFudDsgLyog5pu05reh55qE6IOM5pmv6Imy6KGo56S65LiN5Y+v54K55Ye7ICovXG4gICAgY29sb3I6ICNlY2VmZjE7IC8qIOa3oeiJsuaWh+WtlyAqL1xuICAgIGN1cnNvcjogbm90LWFsbG93ZWQ7IC8qIOemgeeUqOWFieaghyAqL1xuICAgIGJveC1zaGFkb3c6IG5vbmU7IC8qIOWOu+mZpOmYtOW9sSAqL1xuICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9 */</style><style>.EEznAG43zTuQkQq624yy {
  width: 400px;
}
.EEznAG43zTuQkQq624yy .Zt6_7jfC9rAnl4Hvckzs {
  padding: 16px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.EEznAG43zTuQkQq624yy .Zt6_7jfC9rAnl4Hvckzs .Je2jFsFrbPjN7Upq5740 {
  width: 69px;
  height: 24px;
  margin: 7px 4px;
}
.EEznAG43zTuQkQq624yy .Zt6_7jfC9rAnl4Hvckzs .Je2jFsFrbPjN7Upq5740 svg {
  width: 100%;
  height: 100%;
}
.EEznAG43zTuQkQq624yy .Zt6_7jfC9rAnl4Hvckzs .c7QEl61sArXCQe0GnzQ5 {
  width: 24px;
  height: 24px;
  cursor: pointer;
}
.EEznAG43zTuQkQq624yy .ci0NHoq5VTLikHkgliPO {
  padding: 8px 16px 16px;
}
.EEznAG43zTuQkQq624yy .ci0NHoq5VTLikHkgliPO > a {
  display: block;
  padding-top: 8px;
  text-align: center;
  color: #3d5afe;
}
.EEznAG43zTuQkQq624yy .ci0NHoq5VTLikHkgliPO > a:hover {
  color: #3d5afe;
}

/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL3NyYy92aWV3cy9jb21wb25lbnRzL0JveC9pbmRleC5tb2R1bGUubGVzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtFQUNFLFlBQUE7QUFDRjtBQUZBO0VBR0ksYUFBQTtFQUNBLGFBQUE7RUFDQSxtQkFBQTtFQUNBLDhCQUFBO0FBRUo7QUFSQTtFQVFNLFdBQUE7RUFDQSxZQUFBO0VBQ0EsZUFBQTtBQUdOO0FBYkE7RUFZUSxXQUFBO0VBQ0EsWUFBQTtBQUlSO0FBakJBO0VBaUJNLFdBQUE7RUFDQSxZQUFBO0VBQ0EsZUFBQTtBQUdOO0FBdEJBO0VBdUJJLHNCQUFBO0FBRUo7QUFESTtFQUNFLGNBQUE7RUFDQSxnQkFBQTtFQUNBLGtCQUFBO0VBQ0EsY0FBQTtBQUdOO0FBRk07RUFDRSxjQUFBO0FBSVIiLCJzb3VyY2VzQ29udGVudCI6WyIuYm94IHtcbiAgd2lkdGg6IDQwMHB4O1xuICAuaGVhZGVyIHtcbiAgICBwYWRkaW5nOiAxNnB4O1xuICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWJldHdlZW47XG4gICAgLmxvZ28ge1xuICAgICAgd2lkdGg6IDY5cHg7XG4gICAgICBoZWlnaHQ6IDI0cHg7XG4gICAgICBtYXJnaW46IDdweCA0cHg7XG4gICAgICBzdmcge1xuICAgICAgICB3aWR0aDogMTAwJTtcbiAgICAgICAgaGVpZ2h0OiAxMDAlO1xuICAgICAgfVxuICAgIH1cbiAgICAuY2xvc2VJY29uIHtcbiAgICAgIHdpZHRoOiAyNHB4O1xuICAgICAgaGVpZ2h0OiAyNHB4O1xuICAgICAgY3Vyc29yOiBwb2ludGVyO1xuICAgIH1cbiAgfVxuICAuY29udGVudCB7XG4gICAgcGFkZGluZzogOHB4IDE2cHggMTZweDtcbiAgICAmID4gYSB7XG4gICAgICBkaXNwbGF5OiBibG9jaztcbiAgICAgIHBhZGRpbmctdG9wOiA4cHg7XG4gICAgICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gICAgICBjb2xvcjogIzNkNWFmZTtcbiAgICAgICY6aG92ZXIge1xuICAgICAgICBjb2xvcjogIzNkNWFmZTtcbiAgICAgIH1cbiAgICB9XG4gIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0= */</style><style>.BW1QT6wRodElrY9DbAeQ {
  display: flex;
  align-items: center;
  flex-direction: row-reverse;
  justify-content: space-between;
}
.BW1QT6wRodElrY9DbAeQ .U_jFhfpfYNrIrQRSO7_Z {
  text-wrap: nowrap;
}
.BW1QT6wRodElrY9DbAeQ input[type="checkbox"] {
  height: 0;
  width: 0;
  visibility: hidden;
  display: none;
}
.BW1QT6wRodElrY9DbAeQ label {
  cursor: pointer;
  text-indent: -9999px;
  width: 56px;
  height: 28px;
  background: grey;
  display: block;
  border-radius: 100px;
  position: relative;
}
.BW1QT6wRodElrY9DbAeQ label:after {
  content: "";
  position: absolute;
  top: 4px;
  left: 4px;
  width: 20px;
  height: 20px;
  background: #fff;
  border-radius: 90px;
  transition: 0.3s;
}
.BW1QT6wRodElrY9DbAeQ input:checked + label {
  background: #ff8f00;
  box-shadow: 0px 5px 5px -3px rgba(0, 0, 0, 0.08), 0px 3px 14px 2px rgba(0, 0, 0, 0.04), 0px 8px 10px 1px rgba(0, 0, 0, 0.06);
}
.BW1QT6wRodElrY9DbAeQ input:checked + label:after {
  left: calc(100% - 4px);
  transform: translateX(-100%);
}
.BW1QT6wRodElrY9DbAeQ label:active:after {
  width: 56px;
}
.BW1QT6wRodElrY9DbAeQ body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL3NyYy92aWV3cy9jb21wb25lbnRzL1N3aXRjaC9zd2l0Y2gubW9kdWxlLmxlc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFDRSxhQUFBO0VBQ0EsbUJBQUE7RUFDQSwyQkFBQTtFQUNBLDhCQUFBO0FBQ0Y7QUFMQTtFQU9JLGlCQUFBO0FBQ0o7QUFSQTtFQVdJLFNBQUE7RUFDQSxRQUFBO0VBQ0Esa0JBQUE7RUFDQSxhQUFBO0FBQUo7QUFkQTtFQWtCSSxlQUFBO0VBQ0Esb0JBQUE7RUFDQSxXQUFBO0VBQ0EsWUFBQTtFQUNBLGdCQUFBO0VBQ0EsY0FBQTtFQUNBLG9CQUFBO0VBQ0Esa0JBQUE7QUFESjtBQXhCQTtFQTZCSSxXQUFBO0VBQ0Esa0JBQUE7RUFDQSxRQUFBO0VBQ0EsU0FBQTtFQUNBLFdBQUE7RUFDQSxZQUFBO0VBQ0EsZ0JBQUE7RUFDQSxtQkFBQTtFQUNBLGdCQUFBO0FBRko7QUFuQ0E7RUF5Q0ksbUJBQUE7RUFDQSw0SEFBQTtBQUhKO0FBdkNBO0VBK0NJLHNCQUFBO0VBQ0EsNEJBQUE7QUFMSjtBQTNDQTtFQW9ESSxXQUFBO0FBTko7QUE5Q0E7RUF5REksYUFBQTtFQUNBLHVCQUFBO0VBQ0EsbUJBQUE7RUFDQSxhQUFBO0FBUkoiLCJzb3VyY2VzQ29udGVudCI6WyIuc3dpdGNoIHtcbiAgZGlzcGxheTogZmxleDtcbiAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgZmxleC1kaXJlY3Rpb246IHJvdy1yZXZlcnNlO1xuICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWJldHdlZW47XG5cbiAgLmRlc2NyaWJlIHtcbiAgICB0ZXh0LXdyYXA6IG5vd3JhcDtcbiAgfVxuXG4gIGlucHV0W3R5cGU9XCJjaGVja2JveFwiXSB7XG4gICAgaGVpZ2h0OiAwO1xuICAgIHdpZHRoOiAwO1xuICAgIHZpc2liaWxpdHk6IGhpZGRlbjtcbiAgICBkaXNwbGF5OiBub25lO1xuICB9XG5cbiAgbGFiZWwge1xuICAgIGN1cnNvcjogcG9pbnRlcjtcbiAgICB0ZXh0LWluZGVudDogLTk5OTlweDtcbiAgICB3aWR0aDogNTZweDtcbiAgICBoZWlnaHQ6IDI4cHg7XG4gICAgYmFja2dyb3VuZDogZ3JleTtcbiAgICBkaXNwbGF5OiBibG9jaztcbiAgICBib3JkZXItcmFkaXVzOiAxMDBweDtcbiAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIH1cblxuICBsYWJlbDphZnRlciB7XG4gICAgY29udGVudDogXCJcIjtcbiAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgdG9wOiA0cHg7XG4gICAgbGVmdDogNHB4O1xuICAgIHdpZHRoOiAyMHB4O1xuICAgIGhlaWdodDogMjBweDtcbiAgICBiYWNrZ3JvdW5kOiAjZmZmO1xuICAgIGJvcmRlci1yYWRpdXM6IDkwcHg7XG4gICAgdHJhbnNpdGlvbjogMC4zcztcbiAgfVxuXG4gIGlucHV0OmNoZWNrZWQgKyBsYWJlbCB7XG4gICAgYmFja2dyb3VuZDogI2ZmOGYwMDtcbiAgICBib3gtc2hhZG93OiAwcHggNXB4IDVweCAtM3B4IHJnYmEoMCwgMCwgMCwgMC4wOCksXG4gICAgICAwcHggM3B4IDE0cHggMnB4IHJnYmEoMCwgMCwgMCwgMC4wNCksIDBweCA4cHggMTBweCAxcHggcmdiYSgwLCAwLCAwLCAwLjA2KTtcbiAgfVxuXG4gIGlucHV0OmNoZWNrZWQgKyBsYWJlbDphZnRlciB7XG4gICAgbGVmdDogY2FsYygxMDAlIC0gNHB4KTtcbiAgICB0cmFuc2Zvcm06IHRyYW5zbGF0ZVgoLTEwMCUpO1xuICB9XG5cbiAgbGFiZWw6YWN0aXZlOmFmdGVyIHtcbiAgICB3aWR0aDogNTZweDtcbiAgfVxuXG4gIC8vIGNlbnRlcmluZ1xuICBib2R5IHtcbiAgICBkaXNwbGF5OiBmbGV4O1xuICAgIGp1c3RpZnktY29udGVudDogY2VudGVyO1xuICAgIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gICAgaGVpZ2h0OiAxMDB2aDtcbiAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ== */</style><style>.av93VnBkT8rC6BfwHXXl {
  display: flex;
  align-items: center;
  cursor: pointer;
}
/* 隐藏原始复选框 */
.av93VnBkT8rC6BfwHXXl input {
  visibility: hidden;
  position: absolute;
}
/* 自定义复选框的样式 */
.av93VnBkT8rC6BfwHXXl .ccHDoQWfCQ0wpKNe51Og {
  position: relative;
  height: 20px;
  width: 20px;
  background-color: #fff;
  /* 背景色保持白色以保持较好的对比 */
  border: 1px solid #d9d9d9;
  /* 默认边框颜色为浅灰色 */
  display: inline-block;
  border-radius: 4px;
  /* 圆角 */
  transition: background-color 0.3s, border-color 0.3s;
  /* 添加过渡效果 */
}
/* 当复选框被选中或不确定状态时的样式 */
.av93VnBkT8rC6BfwHXXl input:checked + .ccHDoQWfCQ0wpKNe51Og,
.av93VnBkT8rC6BfwHXXl input:indeterminate + .ccHDoQWfCQ0wpKNe51Og {
  background-color: #ffc107;
  /* 金色背景 */
  border-color: #ffc107;
  /* 金色边框 */
}
/* 添加对号 */
.av93VnBkT8rC6BfwHXXl .ccHDoQWfCQ0wpKNe51Og:after {
  content: "";
  position: absolute;
  display: none;
}
.av93VnBkT8rC6BfwHXXl input:checked + .ccHDoQWfCQ0wpKNe51Og:after {
  display: block;
  left: 50%;
  top: 50%;
  width: 6px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  transform: translate(-50%, -50%) rotate(45deg);
  /* Combine translations and rotations */
}
/* 不确定状态下的方块 */
.av93VnBkT8rC6BfwHXXl input:indeterminate + .ccHDoQWfCQ0wpKNe51Og:after {
  content: "";
  position: absolute;
  display: block;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  /* Perfectly center the square */
  width: 10px;
  height: 5px;
  background: white;
  /* 使用白色方块以增加对比度 */
}
/* 处理禁用状态 */
.av93VnBkT8rC6BfwHXXl input:disabled + .ccHDoQWfCQ0wpKNe51Og {
  background-color: #e0e0e0;
  /* 灰色背景表示禁用 */
  border-color: #bdbdbd;
  /* 灰色边框 */
  cursor: not-allowed;
  /* 鼠标禁用状态指示 */
}
.av93VnBkT8rC6BfwHXXl input:disabled + .ccHDoQWfCQ0wpKNe51Og:after {
  background: #bdbdbd;
  /* 灰色对号或方块表示禁用 */
}

/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL3NyYy92aWV3cy9jb21wb25lbnRzL0NoZWNrYm94L0NoZWNrYm94Lm1vZHVsZS5sZXNzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0UsYUFBQTtFQUNBLG1CQUFBO0VBQ0EsZUFBQTtBQUNGO0FBQ0EsWUFBWTtBQUVaO0VBQ0Usa0JBQUE7RUFDQSxrQkFBQTtBQUFGO0FBQ0EsY0FBYztBQUdkO0VBQ0Usa0JBQUE7RUFDQSxZQUFBO0VBQ0EsV0FBQTtFQUNBLHNCQUFBO0VBREEsb0JBQW9CO0VBRXBCLHlCQUFBO0VBQUEsZUFBZTtFQUNmLHFCQUFBO0VBQ0Esa0JBQUE7RUFDQSxPQUFPO0VBQVAsb0RBQUE7RUFFQSxXQUFXO0FBQ2I7QUFDQSxzQkFBc0I7QUFBdEI7O0VBRUUseUJBQUE7RUFFQSxTQUFTO0VBRFQscUJBQUE7RUFHQSxTQUFTO0FBQ1g7QUFDQSxTQUFTO0FBRFQ7RUFDRSxXQUFBO0VBQ0Esa0JBQUE7RUFDQSxhQUFBO0FBR0Y7QUFBQTtFQUNFLGNBQUE7RUFDQSxTQUFBO0VBQ0EsUUFBQTtFQUNBLFVBQUE7RUFDQSxZQUFBO0VBQ0EsbUJBQUE7RUFDQSx5QkFBQTtFQUNBLDhDQUFBO0VBRUEsdUNBQXVDO0FBQ3pDO0FBQ0EsY0FBYztBQUFkO0VBQ0UsV0FBQTtFQUNBLGtCQUFBO0VBQ0EsY0FBQTtFQUNBLFNBQUE7RUFDQSxRQUFBO0VBQ0EsZ0NBQUE7RUFFQSxnQ0FBZ0M7RUFEaEMsV0FBQTtFQUNBLFdBQUE7RUFDQSxpQkFBQTtFQUdBLGlCQUFpQjtBQUNuQjtBQUNBLFdBQVc7QUFEWDtFQUNFLHlCQUFBO0VBR0EsYUFBYTtFQUZiLHFCQUFBO0VBSUEsU0FBUztFQUhULG1CQUFBO0VBS0EsYUFBYTtBQUNmO0FBSEE7RUFDRSxtQkFBQTtFQUtBLGdCQUFnQjtBQUNsQiIsInNvdXJjZXNDb250ZW50IjpbIi5jdXN0b21DaGVja2JveCB7XG4gIGRpc3BsYXk6IGZsZXg7XG4gIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gIGN1cnNvcjogcG9pbnRlcjtcbn1cblxuLyog6ZqQ6JeP5Y6f5aeL5aSN6YCJ5qGGICovXG4uY3VzdG9tQ2hlY2tib3ggaW5wdXQge1xuICB2aXNpYmlsaXR5OiBoaWRkZW47XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbn1cblxuLyog6Ieq5a6a5LmJ5aSN6YCJ5qGG55qE5qC35byPICovXG4uY3VzdG9tQ2hlY2tib3ggLmNoZWNrbWFyayB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgaGVpZ2h0OiAyMHB4O1xuICB3aWR0aDogMjBweDtcbiAgYmFja2dyb3VuZC1jb2xvcjogI2ZmZjsgLyog6IOM5pmv6Imy5L+d5oyB55m96Imy5Lul5L+d5oyB6L6D5aW955qE5a+55q+UICovXG4gIGJvcmRlcjogMXB4IHNvbGlkICNkOWQ5ZDk7IC8qIOm7mOiupOi+ueahhuminOiJsuS4uua1heeBsOiJsiAqL1xuICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gIGJvcmRlci1yYWRpdXM6IDRweDsgLyog5ZyG6KeSICovXG4gIHRyYW5zaXRpb246IGJhY2tncm91bmQtY29sb3IgMC4zcywgYm9yZGVyLWNvbG9yIDAuM3M7IC8qIOa3u+WKoOi/h+a4oeaViOaenCAqL1xufVxuXG4vKiDlvZPlpI3pgInmoYbooqvpgInkuK3miJbkuI3noa7lrprnirbmgIHml7bnmoTmoLflvI8gKi9cbi5jdXN0b21DaGVja2JveCBpbnB1dDpjaGVja2VkICsgLmNoZWNrbWFyayxcbi5jdXN0b21DaGVja2JveCBpbnB1dDppbmRldGVybWluYXRlICsgLmNoZWNrbWFyayB7XG4gIGJhY2tncm91bmQtY29sb3I6ICNmZmMxMDc7IC8qIOmHkeiJsuiDjOaZryAqL1xuICBib3JkZXItY29sb3I6ICNmZmMxMDc7IC8qIOmHkeiJsui+ueahhiAqL1xufVxuXG4vKiDmt7vliqDlr7nlj7cgKi9cbi5jdXN0b21DaGVja2JveCAuY2hlY2ttYXJrOmFmdGVyIHtcbiAgY29udGVudDogXCJcIjtcbiAgcG9zaXRpb246IGFic29sdXRlO1xuICBkaXNwbGF5OiBub25lO1xufVxuXG4uY3VzdG9tQ2hlY2tib3ggaW5wdXQ6Y2hlY2tlZCArIC5jaGVja21hcms6YWZ0ZXIge1xuICBkaXNwbGF5OiBibG9jaztcbiAgbGVmdDogNTAlO1xuICB0b3A6IDUwJTtcbiAgd2lkdGg6IDZweDtcbiAgaGVpZ2h0OiAxMHB4O1xuICBib3JkZXI6IHNvbGlkIHdoaXRlO1xuICBib3JkZXItd2lkdGg6IDAgM3B4IDNweCAwO1xuICB0cmFuc2Zvcm06IHRyYW5zbGF0ZSgtNTAlLCAtNTAlKSByb3RhdGUoNDVkZWcpOyAvKiBDb21iaW5lIHRyYW5zbGF0aW9ucyBhbmQgcm90YXRpb25zICovXG59XG5cbi8qIOS4jeehruWumueKtuaAgeS4i+eahOaWueWdlyAqL1xuLmN1c3RvbUNoZWNrYm94IGlucHV0OmluZGV0ZXJtaW5hdGUgKyAuY2hlY2ttYXJrOmFmdGVyIHtcbiAgY29udGVudDogXCJcIjtcbiAgcG9zaXRpb246IGFic29sdXRlO1xuICBkaXNwbGF5OiBibG9jaztcbiAgbGVmdDogNTAlO1xuICB0b3A6IDUwJTtcbiAgdHJhbnNmb3JtOiB0cmFuc2xhdGUoLTUwJSwgLTUwJSk7IC8qIFBlcmZlY3RseSBjZW50ZXIgdGhlIHNxdWFyZSAqL1xuICB3aWR0aDogMTBweDtcbiAgaGVpZ2h0OiA1cHg7XG4gIGJhY2tncm91bmQ6IHdoaXRlOyAvKiDkvb/nlKjnmb3oibLmlrnlnZfku6Xlop7liqDlr7nmr5TluqYgKi9cbn1cblxuLyog5aSE55CG56aB55So54q25oCBICovXG4uY3VzdG9tQ2hlY2tib3ggaW5wdXQ6ZGlzYWJsZWQgKyAuY2hlY2ttYXJrIHtcbiAgYmFja2dyb3VuZC1jb2xvcjogI2UwZTBlMDsgLyog54Gw6Imy6IOM5pmv6KGo56S656aB55SoICovXG4gIGJvcmRlci1jb2xvcjogI2JkYmRiZDsgLyog54Gw6Imy6L655qGGICovXG4gIGN1cnNvcjogbm90LWFsbG93ZWQ7IC8qIOm8oOagh+emgeeUqOeKtuaAgeaMh+ekuiAqL1xufVxuXG4uY3VzdG9tQ2hlY2tib3ggaW5wdXQ6ZGlzYWJsZWQgKyAuY2hlY2ttYXJrOmFmdGVyIHtcbiAgYmFja2dyb3VuZDogI2JkYmRiZDsgLyog54Gw6Imy5a+55Y+35oiW5pa55Z2X6KGo56S656aB55SoICovXG59XG4iXSwic291cmNlUm9vdCI6IiJ9 */</style><style>.kLB7SXuCbOA1VDEuayQ2 {
  position: fixed;
  top: 20px;
  right: 20px;
  z-index: 9999;
  min-height: 244px;
  width: 400px;
  background: #ffffff;
  box-shadow: 0px 2px 4px -1px rgba(0, 0, 0, 0.08), 0px 1px 10px 0px rgba(0, 0, 0, 0.04), 0px 4px 5px 0px rgba(0, 0, 0, 0.06);
  border-radius: 12px;
}
.kLB7SXuCbOA1VDEuayQ2 .zEOKQl0KPtsInhEXQ5Bz .cLVWKu0XCorcERQg9FKl {
  display: flex;
  justify-content: center;
  margin-bottom: 28px;
}
.kLB7SXuCbOA1VDEuayQ2 .zEOKQl0KPtsInhEXQ5Bz .cLVWKu0XCorcERQg9FKl .jR9tZOYlGybercDP5RXg {
  animation: yjWYeSBhppaYr8pyCDGP 1s linear infinite;
}
.kLB7SXuCbOA1VDEuayQ2 .zEOKQl0KPtsInhEXQ5Bz .cyF9d8HEngPs9BJtmRBB {
  font-size: 16px;
  font-family: OpenSans-Bold, OpenSans;
  font-weight: bold;
  color: rgba(0, 0, 0, 0.88);
  line-height: 22px;
  text-align: center;
}
.kLB7SXuCbOA1VDEuayQ2 .zEOKQl0KPtsInhEXQ5Bz .Panq7Ykt8Gxb0RQl78BV {
  font-size: 16px;
  font-family: OpenSans-Bold, OpenSans;
  font-weight: bold;
  color: #479e25;
  margin-top: 6px;
  line-height: 22px;
  text-decoration: underline;
  text-align: center;
  cursor: pointer;
}
@keyframes yjWYeSBhppaYr8pyCDGP {
  from {
    transform: rotate(360deg);
  }
  to {
    transform: rotate(0deg);
  }
}

/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL3NyYy9jb21wb25lbnRzL25vdEJhY2tncm91bmQvbm90aWZpY2F0aW9uL2luZGV4Lm1vZHVsZS5sZXNzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0UsZUFBQTtFQUNBLFNBQUE7RUFDQSxXQUFBO0VBQ0EsYUFBQTtFQUVBLGlCQUFBO0VBQ0EsWUFBQTtFQUNBLG1CQUFBO0VBQ0EsMkhBQUE7RUFFQSxtQkFBQTtBQURGO0FBVkE7RUFlTSxhQUFBO0VBQ0EsdUJBQUE7RUFDQSxtQkFBQTtBQUZOO0FBZkE7RUFvQlEsa0RBQUE7QUFGUjtBQWxCQTtFQXlCTSxlQUFBO0VBQ0Esb0NBQUE7RUFDQSxpQkFBQTtFQUNBLDBCQUFBO0VBQ0EsaUJBQUE7RUFDQSxrQkFBQTtBQUpOO0FBMUJBO0VBa0NNLGVBQUE7RUFDQSxvQ0FBQTtFQUNBLGlCQUFBO0VBQ0EsY0FBQTtFQUNBLGVBQUE7RUFDQSxpQkFBQTtFQUNBLDBCQUFBO0VBQ0Esa0JBQUE7RUFDQSxlQUFBO0FBTE47QUFVQTtFQUNFO0lBQ0UseUJBQUE7RUFSRjtFQVdBO0lBQ0UsdUJBQUE7RUFURjtBQUNGIiwic291cmNlc0NvbnRlbnQiOlsiLm5vdGlmeUNvbnRhaW5lciB7XG4gIHBvc2l0aW9uOiBmaXhlZDtcbiAgdG9wOiAyMHB4O1xuICByaWdodDogMjBweDtcbiAgei1pbmRleDogOTk5OTtcblxuICBtaW4taGVpZ2h0OiAyNDRweDtcbiAgd2lkdGg6IDQwMHB4O1xuICBiYWNrZ3JvdW5kOiAjZmZmZmZmO1xuICBib3gtc2hhZG93OiAwcHggMnB4IDRweCAtMXB4IHJnYmEoMCwgMCwgMCwgMC4wOCksXG4gICAgMHB4IDFweCAxMHB4IDBweCByZ2JhKDAsIDAsIDAsIDAuMDQpLCAwcHggNHB4IDVweCAwcHggcmdiYSgwLCAwLCAwLCAwLjA2KTtcbiAgYm9yZGVyLXJhZGl1czogMTJweDtcblxuICAubm90aWZ5Q29udGVudCB7XG4gICAgLmltZyB7XG4gICAgICBkaXNwbGF5OiBmbGV4O1xuICAgICAganVzdGlmeS1jb250ZW50OiBjZW50ZXI7XG4gICAgICBtYXJnaW4tYm90dG9tOiAyOHB4O1xuXG4gICAgICAubG9hZGluZyB7XG4gICAgICAgIGFuaW1hdGlvbjogcm90YXRlIDFzIGxpbmVhciBpbmZpbml0ZTtcbiAgICAgIH1cbiAgICB9XG5cbiAgICAudGl0bGUge1xuICAgICAgZm9udC1zaXplOiAxNnB4O1xuICAgICAgZm9udC1mYW1pbHk6IE9wZW5TYW5zLUJvbGQsIE9wZW5TYW5zO1xuICAgICAgZm9udC13ZWlnaHQ6IGJvbGQ7XG4gICAgICBjb2xvcjogcmdiYSgwLCAwLCAwLCAwLjg4KTtcbiAgICAgIGxpbmUtaGVpZ2h0OiAyMnB4O1xuICAgICAgdGV4dC1hbGlnbjogY2VudGVyO1xuICAgIH1cblxuICAgIC5zdWJUaXRsZSB7XG4gICAgICBmb250LXNpemU6IDE2cHg7XG4gICAgICBmb250LWZhbWlseTogT3BlblNhbnMtQm9sZCwgT3BlblNhbnM7XG4gICAgICBmb250LXdlaWdodDogYm9sZDtcbiAgICAgIGNvbG9yOiAjNDc5ZTI1O1xuICAgICAgbWFyZ2luLXRvcDogNnB4O1xuICAgICAgbGluZS1oZWlnaHQ6IDIycHg7XG4gICAgICB0ZXh0LWRlY29yYXRpb246IHVuZGVybGluZTtcbiAgICAgIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgICAgIGN1cnNvcjogcG9pbnRlcjtcbiAgICB9XG4gIH1cbn1cblxuQGtleWZyYW1lcyByb3RhdGUge1xuICBmcm9tIHtcbiAgICB0cmFuc2Zvcm06IHJvdGF0ZSgzNjBkZWcpO1xuICB9XG5cbiAgdG8ge1xuICAgIHRyYW5zZm9ybTogcm90YXRlKDBkZWcpO1xuICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9 */</style><style>.L6ydMcbc4E5EF6EfA6aG .ant-modal-title {
  font-weight: bold;
  font-size: 20px;
  color: rgba(0, 0, 0, 0.88);
  line-height: 28px;
  text-align: left;
  font-style: normal;
  text-transform: none;
}
.hNkYvyrcRaG_kWiy3rkO {
  margin-top: 16px;
}
.hNkYvyrcRaG_kWiy3rkO .ant-alert-message {
  color: #2189e5;
}
.TmOCIHFUEqljERUfq_aY {
  font-weight: 400;
  font-size: 14px;
  color: rgba(0, 0, 0, 0.5);
  line-height: 24px;
  text-align: left;
  font-style: normal;
  text-transform: none;
  margin-bottom: 24px;
}
.FijT8eY01qZ_10LX68JG {
  margin-bottom: 24px;
}
.FijT8eY01qZ_10LX68JG .lwYJMkm6l65Ew9BB03hg {
  width: 100%;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 24px;
  flex-wrap: wrap;
}

/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL3NyYy9jb21wb25lbnRzL25vdEJhY2tncm91bmQvYWUvdmVyaWZ5TXVsdGlsaW5ndWFsSW1wb3J0c01vZHVsZS5tb2R1bGUubGVzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtFQUdNLGlCQUFBO0VBQ0EsZUFBQTtFQUNBLDBCQUFBO0VBQ0EsaUJBQUE7RUFDQSxnQkFBQTtFQUNBLGtCQUFBO0VBQ0Esb0JBQUE7QUFETjtBQVNBO0VBQ0UsZ0JBQUE7QUFQRjtBQU1BO0VBSU0sY0FBQTtBQVBOO0FBWUE7RUFDRSxnQkFBQTtFQUNBLGVBQUE7RUFDQSx5QkFBQTtFQUNBLGlCQUFBO0VBQ0EsZ0JBQUE7RUFDQSxrQkFBQTtFQUNBLG9CQUFBO0VBRUEsbUJBQUE7QUFYRjtBQWNBO0VBQ0UsbUJBQUE7QUFaRjtBQVdBO0VBR0ksV0FBQTtFQUNBLGFBQUE7RUFDQSxxQ0FBQTtFQUNBLGNBQUE7RUFDQSxlQUFBO0FBWEoiLCJzb3VyY2VzQ29udGVudCI6WyIubW9kYWwge1xuICA6Z2xvYmFsIHtcbiAgICAuYW50LW1vZGFsLXRpdGxlIHtcbiAgICAgIGZvbnQtd2VpZ2h0OiBib2xkO1xuICAgICAgZm9udC1zaXplOiAyMHB4O1xuICAgICAgY29sb3I6IHJnYmEoMCwgMCwgMCwgMC44OCk7XG4gICAgICBsaW5lLWhlaWdodDogMjhweDtcbiAgICAgIHRleHQtYWxpZ246IGxlZnQ7XG4gICAgICBmb250LXN0eWxlOiBub3JtYWw7XG4gICAgICB0ZXh0LXRyYW5zZm9ybTogbm9uZTtcbiAgICB9XG4gIH1cbn1cblxuLmNvbnRhaW5lciB7XG59XG5cbi5hbGVydCB7XG4gIG1hcmdpbi10b3A6IDE2cHg7XG4gIDpnbG9iYWwge1xuICAgIC5hbnQtYWxlcnQtbWVzc2FnZSB7XG4gICAgICBjb2xvcjogIzIxODllNTtcbiAgICB9XG4gIH1cbn1cblxuLmhlYWRlcnNUaXRsZSB7XG4gIGZvbnQtd2VpZ2h0OiA0MDA7XG4gIGZvbnQtc2l6ZTogMTRweDtcbiAgY29sb3I6IHJnYmEoMCwgMCwgMCwgMC41KTtcbiAgbGluZS1oZWlnaHQ6IDI0cHg7XG4gIHRleHQtYWxpZ246IGxlZnQ7XG4gIGZvbnQtc3R5bGU6IG5vcm1hbDtcbiAgdGV4dC10cmFuc2Zvcm06IG5vbmU7XG5cbiAgbWFyZ2luLWJvdHRvbTogMjRweDtcbn1cblxuLm11bHRpcGxlQ2hvaWNlIHtcbiAgbWFyZ2luLWJvdHRvbTogMjRweDtcbiAgLmNoZWNrYm94cyB7XG4gICAgd2lkdGg6IDEwMCU7XG4gICAgZGlzcGxheTogZ3JpZDtcbiAgICBncmlkLXRlbXBsYXRlLWNvbHVtbnM6IHJlcGVhdCgzLCAxZnIpO1xuICAgIGdyaWQtZ2FwOiAyNHB4O1xuICAgIGZsZXgtd3JhcDogd3JhcDtcbiAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ== */</style><style>.YezkX1bsuRLzG32QxqOg {
  top: 0;
  right: 0;
  z-index: 1;
  position: absolute;
  font-family: OpenSans-Bold, OpenSans;
  text-wrap: nowrap;
}
.YezkX1bsuRLzG32QxqOg .NO7_066UyH5F_wWr_CDK {
  width: 100%;
  height: 21px;
  border-top-left-radius: 8px;
  border-top-right-radius: 8px;
  display: flex;
  align-items: center;
  position: relative;
  color: #ffffff;
}
.YezkX1bsuRLzG32QxqOg .NO7_066UyH5F_wWr_CDK .SVkdhKdtfHfJYdb3DeAC {
  position: absolute;
  left: 10px;
  width: 15px;
  height: 15px;
}
.YezkX1bsuRLzG32QxqOg .NO7_066UyH5F_wWr_CDK .SVkdhKdtfHfJYdb3DeAC g {
  fill: antiquewhite;
}
.YezkX1bsuRLzG32QxqOg .NO7_066UyH5F_wWr_CDK .OCxxhXIFkJiVv3OW8Dki {
  flex: 1;
  text-align: center;
}
.YezkX1bsuRLzG32QxqOg .NO7_066UyH5F_wWr_CDK .eCi62QFGWYWFIdMKmoCY {
  min-width: 45px;
  height: 21px;
  position: absolute;
  right: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #11bc57;
  border-top-right-radius: 8px;
  border-left: 1px solid #00b050;
}
.YezkX1bsuRLzG32QxqOg .jkiqcnRJY9Y07V6l96yO {
  background: #2acc6f;
}
.YezkX1bsuRLzG32QxqOg .mUWOwtz1vBHUHo7ESj3H {
  background: #fb5b28;
}
.YezkX1bsuRLzG32QxqOg .AJ8PVFZUE_njDcnN2VtU {
  padding: 0 20px;
  background: #ff8f00;
  box-shadow: 0px 5px 5px -3px rgba(0, 0, 0, 0.08), 0px 3px 14px 2px rgba(0, 0, 0, 0.04), 0px 8px 10px 1px rgba(0, 0, 0, 0.06);
  border-radius: 22px;
  margin-top: 6px px;
  font-family: OpenSans-Bold, OpenSans;
  font-weight: bold;
  color: #ffffff;
  font-size: 16px;
  line-height: 38px;
}
.YezkX1bsuRLzG32QxqOg .AJ8PVFZUE_njDcnN2VtU svg {
  margin-right: 8px;
}
.mrHXcmsfueCtCtmrCvhk .UN3gm0MT4HG3PapvB5Es {
  width: 100%;
  height: 86px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-flow: column;
  background: white !important;
  color: rgba(0, 0, 0, 0.24);
}
.mrHXcmsfueCtCtmrCvhk .UN3gm0MT4HG3PapvB5Es svg {
  margin-bottom: 4px;
}
.mrHXcmsfueCtCtmrCvhk .MWgMsOT14PgnlhzDhUao {
  display: flex;
  align-items: center;
  flex-direction: column;
  max-height: 500px;
  overflow-x: hidden;
}
.mrHXcmsfueCtCtmrCvhk .MWgMsOT14PgnlhzDhUao::-webkit-scrollbar {
  width: 4px;
  height: 1px;
}
.mrHXcmsfueCtCtmrCvhk .MWgMsOT14PgnlhzDhUao::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2);
  background: #f7f7f7;
}
.mrHXcmsfueCtCtmrCvhk .MWgMsOT14PgnlhzDhUao::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  background: #f7f7f7;
}
.mrHXcmsfueCtCtmrCvhk .MWgMsOT14PgnlhzDhUao > div {
  min-height: auto;
  background: rgba(0, 0, 0, 0.04);
  padding: 8px;
  margin-bottom: 16px;
  display: flex;
}
.mrHXcmsfueCtCtmrCvhk .MWgMsOT14PgnlhzDhUao > div:last-child {
  border-bottom: 0;
}
.mrHXcmsfueCtCtmrCvhk .MWgMsOT14PgnlhzDhUao > div .irbDaxm05L90StDOVuFf {
  width: 54px;
  height: 54px;
  border-radius: 4px 4px 4px 4px;
  margin-right: 8px;
}
.mrHXcmsfueCtCtmrCvhk .MWgMsOT14PgnlhzDhUao > div .irbDaxm05L90StDOVuFf img {
  width: 100%;
  height: 100%;
}
.mrHXcmsfueCtCtmrCvhk .MWgMsOT14PgnlhzDhUao > div .BEeSRQYIPezxiElL7Y1u {
  min-height: 54px;
  font-weight: 400;
  font-size: 14px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.mrHXcmsfueCtCtmrCvhk .MWgMsOT14PgnlhzDhUao > div .BEeSRQYIPezxiElL7Y1u .me9J0Ec7gRu7hAXPGzY_ {
  color: #000000;
  line-height: 16px;
  text-align: left;
  text-transform: none;
  margin-right: 11px;
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  text-overflow: ellipsis;
  height: 34px;
  width: 268px;
}
.mrHXcmsfueCtCtmrCvhk .MWgMsOT14PgnlhzDhUao > div .BEeSRQYIPezxiElL7Y1u .w6zpsVlllx6TB6P6tv7T {
  width: 268px;
  color: #ff0000;
}
.mrHXcmsfueCtCtmrCvhk .MWgMsOT14PgnlhzDhUao > div .h7v9y0cCilg07Xbu3ry8 {
  display: flex;
  align-items: center;
}
.mrHXcmsfueCtCtmrCvhk .u4k0WEcFhM_UruSqNh2H {
  width: 100%;
  display: flex;
  justify-content: center;
  flex-direction: column;
}
.mrHXcmsfueCtCtmrCvhk .u4k0WEcFhM_UruSqNh2H button {
  margin-bottom: 8px;
  height: 36px;
}
.mrHXcmsfueCtCtmrCvhk .u4k0WEcFhM_UruSqNh2H ._69nR89KKgxcsjj4aZVg {
  background: transparent !important;
  box-shadow: none !important;
  color: black !important;
  font-weight: 400 !important;
  font-size: 14px !important ;
  color: rgba(0, 0, 0, 0.5) !important;
}
.mrHXcmsfueCtCtmrCvhk .u4k0WEcFhM_UruSqNh2H ._69nR89KKgxcsjj4aZVg svg {
  margin-right: 5px;
}

/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL3NyYy9jb21wb25lbnRzL25vdEJhY2tncm91bmQvYWUvYmF0Y2hJbXBvcnREb20ubW9kdWxlLmxlc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBdURBO0VBQ0UsTUFBQTtFQUNBLFFBQUE7RUFDQSxVQUFBO0VBQ0Esa0JBQUE7RUFDQSxvQ0FBQTtFQUNBLGlCQUFBO0FBdERGO0FBZ0RBO0VBU0ksV0FBQTtFQUNBLFlBQUE7RUFDQSwyQkFBQTtFQUNBLDRCQUFBO0VBRUEsYUFBQTtFQUNBLG1CQUFBO0VBQ0Esa0JBQUE7RUFFQSxjQUFBO0FBeERKO0FBc0NBO0VBeUJNLGtCQUFBO0VBQ0EsVUFBQTtFQUNBLFdBQUE7RUFDQSxZQUFBO0FBNUROO0FBZ0NBO0VBOEJRLGtCQUFBO0FBM0RSO0FBNkJBO0VBbUNNLE9BQUE7RUFDQSxrQkFBQTtBQTdETjtBQXlCQTtFQXdDTSxlQUFBO0VBQ0EsWUFBQTtFQUVBLGtCQUFBO0VBQ0EsUUFBQTtFQUVBLGFBQUE7RUFDQSx1QkFBQTtFQUNBLG1CQUFBO0VBRUEseUJBQUE7RUFDQSw0QkFBQTtFQUNBLDhCQUFBO0FBakVOO0FBYUE7RUF5REksbUJBQUE7QUFuRUo7QUFVQTtFQTZESSxtQkFBQTtBQXBFSjtBQU9BO0VBaUVJLGVBQUE7RUFDQSxtQkFBQTtFQUNBLDRIQUFBO0VBRUEsbUJBQUE7RUFDQSxrQkFBQTtFQUNBLG9DQUFBO0VBQ0EsaUJBQUE7RUFDQSxjQUFBO0VBQ0EsZUFBQTtFQUNBLGlCQUFBO0FBdEVKO0FBTEE7RUE4RU0saUJBQUE7QUF0RU47QUEyRUE7RUFFSSxXQUFBO0VBQ0EsWUFBQTtFQUNBLGFBQUE7RUFDQSxtQkFBQTtFQUNBLHVCQUFBO0VBQ0EsaUJBQUE7RUFDQSw0QkFBQTtFQUNBLDBCQUFBO0FBMUVKO0FBaUVBO0VBV00sa0JBQUE7QUF6RU47QUE4REE7RUFnQkksYUFBQTtFQUNBLG1CQUFBO0VBQ0Esc0JBQUE7RUFDQSxpQkFBQTtFQUNBLGtCQUFBO0FBM0VKO0FBNkVJO0VBQ0UsVUFBQTtFQUNBLFdBQUE7QUEzRU47QUE2RUk7RUFDRSxtQkFBQTtFQUNBLG9EQUFBO0VBQ0EsbUJBQUE7QUEzRU47QUE2RUk7RUFDRSxvREFBQTtFQUNBLG1CQUFBO0VBQ0EsbUJBQUE7QUEzRU47QUE4RUk7RUFDRSxnQkFBQTtFQUNBLCtCQUFBO0VBQ0EsWUFBQTtFQUNBLG1CQUFBO0VBQ0EsYUFBQTtBQTVFTjtBQTZFTTtFQUNFLGdCQUFBO0FBM0VSO0FBb0VJO0VBVUksV0FBQTtFQUNBLFlBQUE7RUFDQSw4QkFBQTtFQUNBLGlCQUFBO0FBM0VSO0FBOERJO0VBZU0sV0FBQTtFQUNBLFlBQUE7QUExRVY7QUEwREk7RUFxQkksZ0JBQUE7RUFDQSxnQkFBQTtFQUNBLGVBQUE7RUFDQSxhQUFBO0VBQ0Esc0JBQUE7RUFDQSx1QkFBQTtBQTVFUjtBQWtESTtFQTRCTSxjQUFBO0VBQ0EsaUJBQUE7RUFDQSxnQkFBQTtFQUNBLG9CQUFBO0VBQ0Esa0JBQUE7RUFDQSxnQkFBQTtFQUNBLG9CQUFBO0VBQ0EscUJBQUE7RUFDQSw0QkFBQTtFQUNBLHVCQUFBO0VBQ0EsWUFBQTtFQUNBLFlBQUE7QUEzRVY7QUFvQ0k7RUEwQ00sWUFBQTtFQUNBLGNBQUE7QUEzRVY7QUFnQ0k7RUFnREksYUFBQTtFQUNBLG1CQUFBO0FBN0VSO0FBVEE7RUE0RkksV0FBQTtFQUNBLGFBQUE7RUFDQSx1QkFBQTtFQUNBLHNCQUFBO0FBaEZKO0FBZkE7RUFpR00sa0JBQUE7RUFDQSxZQUFBO0FBL0VOO0FBbkJBO0VBc0dNLGtDQUFBO0VBQ0EsMkJBQUE7RUFDQSx1QkFBQTtFQUNBLDJCQUFBO0VBQ0EsMkJBQUE7RUFDQSxvQ0FBQTtBQWhGTjtBQTNCQTtFQThHUSxpQkFBQTtBQWhGUiIsInNvdXJjZXNDb250ZW50IjpbIi8vIEBmb250LWZhY2Uge1xuLy8gICBmb250LWZhbWlseTogXCJIZWx2ZXRpY2FcIjtcbi8vICAgc3JjOiB1cmwoXCJodHRwczovL2ltZy5kc2Vycy5jb20vZm9udC9VQi1IZWx2ZXRpY2EudHRmXCIpO1xuLy8gfVxuXG4vLyBAZm9udC1mYWNlIHtcbi8vICAgZm9udC1mYW1pbHk6IFwiT3BlblNhbnMtUmVndWxhclwiO1xuLy8gICBzcmM6IHVybChcImh0dHBzOi8vaW1nLmRzZXJzLmNvbS9mb250L09wZW5TYW5zLVJlZ3VsYXIudHRmXCIpO1xuLy8gfVxuXG4vLyBAZm9udC1mYWNlIHtcbi8vICAgZm9udC1mYW1pbHk6IFwiT3BlblNhbnMtQm9sZFwiO1xuLy8gICBzcmM6IHVybChcImh0dHBzOi8vaW1nLmRzZXJzLmNvbS9mb250L09wZW5TYW5zLUJvbGQudHRmXCIpO1xuLy8gfVxuXG4vLyBAZm9udC1mYWNlIHtcbi8vICAgZm9udC1mYW1pbHk6IFwiT3BlblNhbnMtU2VtaUJvbGRcIjtcbi8vICAgc3JjOiB1cmwoXCJodHRwczovL2ltZy5kc2Vycy5jb20vZm9udC9PcGVuU2Fucy1TZW1pQm9sZC50dGZcIik7XG4vLyB9XG5cbi8vIEBmb250LWZhY2Uge1xuLy8gICBmb250LWZhbWlseTogXCJIZWx2ZXRpY2FOZXVlLUJvbGRcIjtcbi8vICAgc3JjOiB1cmwoXCJodHRwczovL2ltZy5kc2Vycy5jb20vZm9udC9IZWx2ZXRpY2FOZXVlLUJvbGQub3RmXCIpO1xuLy8gfVxuXG4vLyBAZm9udC1mYWNlIHtcbi8vICAgZm9udC1mYW1pbHk6IFwicHNsXCI7XG4vLyAgIHNyYzogdXJsKFwiaHR0cHM6Ly9pbWcuZHNlcnMuY29tL2ZvbnQvUFNMMDAyU1AudHRmXCIpO1xuLy8gfVxuXG4vLyBAZm9udC1mYWNlIHtcbi8vICAgZm9udC1mYW1pbHk6IFwiQXJpYWwtQm9sZE1UXCI7XG4vLyAgIHNyYzogdXJsKFwiaHR0cHM6Ly9pbWcuZHNlcnMuY29tL2ZvbnQvQXJpYWwtQm9sZE1ULm90ZlwiKTtcbi8vIH1cblxuLy8gQGZvbnQtZmFjZSB7XG4vLyAgIGZvbnQtZmFtaWx5OiBcIlJ1YmlrLUJvbGRJdGFsaWNcIjtcbi8vICAgc3JjOiB1cmwoXCJodHRwczovL2ltZy5kc2Vycy5jb20vZm9udC9SdWJpay1Cb2xkSXRhbGljLnR0ZlwiKTtcbi8vIH1cblxuLy8gQGZvbnQtZmFjZSB7XG4vLyAgIGZvbnQtZmFtaWx5OiBcIlJ1YmlrLVJlZ3VsYXJcIjtcbi8vICAgc3JjOiB1cmwoXCJodHRwczovL2ltZy5kc2Vycy5jb20vZm9udC9SdWJpay1SZWd1bGFyLnR0ZlwiKTtcbi8vIH1cblxuLy8gQGZvbnQtZmFjZSB7XG4vLyAgIGZvbnQtZmFtaWx5OiBcIlJ1YmlrLUJvbGRcIjtcbi8vICAgc3JjOiB1cmwoXCJodHRwczovL2ltZy5kc2Vycy5jb20vZm9udC9SdWJpay1Cb2xkLnR0ZlwiKTtcbi8vIH1cblxuLy8gQGZvbnQtZmFjZSB7XG4vLyAgIGZvbnQtZmFtaWx5OiBcIlVidW50dS1Cb2xkXCI7XG4vLyAgIHNyYzogdXJsKFwiaHR0cHM6Ly9pbWcuZHNlcnMuY29tL2ZvbnQvVWJ1bnR1LUJvbGQudHRmXCIpO1xuLy8gfVxuXG4uaW1wb3J0X3Byb2R1Y3RfYnV0dG9uIHtcbiAgdG9wOiAwO1xuICByaWdodDogMDtcbiAgei1pbmRleDogMTtcbiAgcG9zaXRpb246IGFic29sdXRlO1xuICBmb250LWZhbWlseTogT3BlblNhbnMtQm9sZCwgT3BlblNhbnM7XG4gIHRleHQtd3JhcDogbm93cmFwO1xuXG4gIC5oZWFkZXIge1xuICAgIHdpZHRoOiAxMDAlO1xuICAgIGhlaWdodDogMjFweDtcbiAgICBib3JkZXItdG9wLWxlZnQtcmFkaXVzOiA4cHg7XG4gICAgYm9yZGVyLXRvcC1yaWdodC1yYWRpdXM6IDhweDtcblxuICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG5cbiAgICBjb2xvcjogI2ZmZmZmZjtcblxuICAgIC8vIGJveC1zaGFkb3c6IDBweCA1cHggNXB4IC0zcHggcmdiYSgwLCAwLCAwLCAwLjA4KSxcbiAgICAvLyAgIDBweCAzcHggMTRweCAycHggcmdiYSgwLCAwLCAwLCAwLjA0KSwgMHB4IDhweCAxMHB4IDFweCByZ2JhKDAsIDAsIDAsIDAuMDYpO1xuICAgIC8vIGJvcmRlci1yYWRpdXM6IDRweDtcblxuICAgIC5pY29uIHtcbiAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgIGxlZnQ6IDEwcHg7XG4gICAgICB3aWR0aDogMTVweDtcbiAgICAgIGhlaWdodDogMTVweDtcbiAgICAgIGcge1xuICAgICAgICBmaWxsOiBhbnRpcXVld2hpdGU7XG4gICAgICB9XG4gICAgfVxuXG4gICAgLnRpdGxlIHtcbiAgICAgIGZsZXg6IDE7XG4gICAgICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gICAgfVxuXG4gICAgLnByaWNlIHtcbiAgICAgIG1pbi13aWR0aDogNDVweDtcbiAgICAgIGhlaWdodDogMjFweDtcblxuICAgICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgICAgcmlnaHQ6IDA7XG5cbiAgICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcbiAgICAgIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG5cbiAgICAgIGJhY2tncm91bmQtY29sb3I6ICMxMWJjNTc7XG4gICAgICBib3JkZXItdG9wLXJpZ2h0LXJhZGl1czogOHB4O1xuICAgICAgYm9yZGVyLWxlZnQ6IDFweCBzb2xpZCAjMDBiMDUwO1xuICAgIH1cbiAgfVxuXG4gIC5zdWNjZWVkIHtcbiAgICBiYWNrZ3JvdW5kOiByZ2IoNDIsIDIwNCwgMTExKTtcbiAgfVxuXG4gIC5lcnJvciB7XG4gICAgYmFja2dyb3VuZDogcmdiKDI1MSwgOTEsIDQwKTtcbiAgfVxuXG4gIC5idXR0b24ge1xuICAgIHBhZGRpbmc6IDAgMjBweDtcbiAgICBiYWNrZ3JvdW5kOiAjZmY4ZjAwO1xuICAgIGJveC1zaGFkb3c6IDBweCA1cHggNXB4IC0zcHggcmdiYSgwLCAwLCAwLCAwLjA4KSxcbiAgICAgIDBweCAzcHggMTRweCAycHggcmdiYSgwLCAwLCAwLCAwLjA0KSwgMHB4IDhweCAxMHB4IDFweCByZ2JhKDAsIDAsIDAsIDAuMDYpO1xuICAgIGJvcmRlci1yYWRpdXM6IDIycHg7XG4gICAgbWFyZ2luLXRvcDogNnB4IHB4O1xuICAgIGZvbnQtZmFtaWx5OiBPcGVuU2Fucy1Cb2xkLCBPcGVuU2FucztcbiAgICBmb250LXdlaWdodDogYm9sZDtcbiAgICBjb2xvcjogI2ZmZmZmZjtcbiAgICBmb250LXNpemU6IDE2cHg7XG4gICAgbGluZS1oZWlnaHQ6IDM4cHg7XG5cbiAgICBzdmcge1xuICAgICAgbWFyZ2luLXJpZ2h0OiA4cHg7XG4gICAgfVxuICB9XG59XG5cbi5iYXRjaENvbnRhaW5lciB7XG4gIC5ub0RhdGEge1xuICAgIHdpZHRoOiAxMDAlO1xuICAgIGhlaWdodDogODZweDtcbiAgICBkaXNwbGF5OiBmbGV4O1xuICAgIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gICAganVzdGlmeS1jb250ZW50OiBjZW50ZXI7XG4gICAgZmxleC1mbG93OiBjb2x1bW47XG4gICAgYmFja2dyb3VuZDogd2hpdGUgIWltcG9ydGFudDtcbiAgICBjb2xvcjogcmdiYSgwLCAwLCAwLCAwLjI0KTtcbiAgICBzdmcge1xuICAgICAgbWFyZ2luLWJvdHRvbTogNHB4O1xuICAgIH1cbiAgfVxuXG4gIC5iYXRjaENvbnRhaW5lcl9ib3gge1xuICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgICBmbGV4LWRpcmVjdGlvbjogY29sdW1uO1xuICAgIG1heC1oZWlnaHQ6IDUwMHB4O1xuICAgIG92ZXJmbG93LXg6IGhpZGRlbjtcblxuICAgICY6Oi13ZWJraXQtc2Nyb2xsYmFyIHtcbiAgICAgIHdpZHRoOiA0cHg7XG4gICAgICBoZWlnaHQ6IDFweDtcbiAgICB9XG4gICAgJjo6LXdlYmtpdC1zY3JvbGxiYXItdGh1bWIge1xuICAgICAgYm9yZGVyLXJhZGl1czogMTBweDtcbiAgICAgIC13ZWJraXQtYm94LXNoYWRvdzogaW5zZXQgMCAwIDVweCByZ2JhKDAsIDAsIDAsIDAuMik7XG4gICAgICBiYWNrZ3JvdW5kOiAjZjdmN2Y3O1xuICAgIH1cbiAgICAmOjotd2Via2l0LXNjcm9sbGJhci10cmFjayB7XG4gICAgICAtd2Via2l0LWJveC1zaGFkb3c6IGluc2V0IDAgMCA1cHggcmdiYSgwLCAwLCAwLCAwLjEpO1xuICAgICAgYm9yZGVyLXJhZGl1czogMTBweDtcbiAgICAgIGJhY2tncm91bmQ6ICNmN2Y3Zjc7XG4gICAgfVxuXG4gICAgJiA+IGRpdiB7XG4gICAgICBtaW4taGVpZ2h0OiBhdXRvO1xuICAgICAgYmFja2dyb3VuZDogcmdiYSgwLCAwLCAwLCAwLjA0KTtcbiAgICAgIHBhZGRpbmc6IDhweDtcbiAgICAgIG1hcmdpbi1ib3R0b206IDE2cHg7XG4gICAgICBkaXNwbGF5OiBmbGV4O1xuICAgICAgJjpsYXN0LWNoaWxkIHtcbiAgICAgICAgYm9yZGVyLWJvdHRvbTogMDtcbiAgICAgIH1cbiAgICAgIC5pbWcge1xuICAgICAgICB3aWR0aDogNTRweDtcbiAgICAgICAgaGVpZ2h0OiA1NHB4O1xuICAgICAgICBib3JkZXItcmFkaXVzOiA0cHggNHB4IDRweCA0cHg7XG4gICAgICAgIG1hcmdpbi1yaWdodDogOHB4O1xuICAgICAgICBpbWcge1xuICAgICAgICAgIHdpZHRoOiAxMDAlO1xuICAgICAgICAgIGhlaWdodDogMTAwJTtcbiAgICAgICAgfVxuICAgICAgfVxuXG4gICAgICAudGV4dCB7XG4gICAgICAgIG1pbi1oZWlnaHQ6IDU0cHg7XG4gICAgICAgIGZvbnQtd2VpZ2h0OiA0MDA7XG4gICAgICAgIGZvbnQtc2l6ZTogMTRweDtcbiAgICAgICAgZGlzcGxheTogZmxleDtcbiAgICAgICAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcbiAgICAgICAganVzdGlmeS1jb250ZW50OiBjZW50ZXI7XG4gICAgICAgIC5uYW1lIHtcbiAgICAgICAgICBjb2xvcjogIzAwMDAwMDtcbiAgICAgICAgICBsaW5lLWhlaWdodDogMTZweDtcbiAgICAgICAgICB0ZXh0LWFsaWduOiBsZWZ0O1xuICAgICAgICAgIHRleHQtdHJhbnNmb3JtOiBub25lO1xuICAgICAgICAgIG1hcmdpbi1yaWdodDogMTFweDtcbiAgICAgICAgICBvdmVyZmxvdzogaGlkZGVuO1xuICAgICAgICAgIGRpc3BsYXk6IC13ZWJraXQtYm94O1xuICAgICAgICAgIC13ZWJraXQtbGluZS1jbGFtcDogMjtcbiAgICAgICAgICAtd2Via2l0LWJveC1vcmllbnQ6IHZlcnRpY2FsO1xuICAgICAgICAgIHRleHQtb3ZlcmZsb3c6IGVsbGlwc2lzO1xuICAgICAgICAgIGhlaWdodDogMzRweDtcbiAgICAgICAgICB3aWR0aDogMjY4cHg7XG4gICAgICAgIH1cbiAgICAgICAgLmVyclRleHQge1xuICAgICAgICAgIHdpZHRoOiAyNjhweDtcbiAgICAgICAgICBjb2xvcjogI2ZmMDAwMDtcbiAgICAgICAgfVxuICAgICAgfVxuXG4gICAgICAuc3RhdHVzIHtcbiAgICAgICAgZGlzcGxheTogZmxleDtcbiAgICAgICAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgICAgIH1cbiAgICB9XG4gIH1cblxuICAuYnRuIHtcbiAgICB3aWR0aDogMTAwJTtcbiAgICBkaXNwbGF5OiBmbGV4O1xuICAgIGp1c3RpZnktY29udGVudDogY2VudGVyO1xuICAgIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gICAgYnV0dG9uIHtcbiAgICAgIG1hcmdpbi1ib3R0b206IDhweDtcbiAgICAgIGhlaWdodDogMzZweDtcbiAgICB9XG5cbiAgICAuY2xlYXIge1xuICAgICAgYmFja2dyb3VuZDogdHJhbnNwYXJlbnQgIWltcG9ydGFudDtcbiAgICAgIGJveC1zaGFkb3c6IG5vbmUgIWltcG9ydGFudDtcbiAgICAgIGNvbG9yOiBibGFjayAhaW1wb3J0YW50O1xuICAgICAgZm9udC13ZWlnaHQ6IDQwMCAhaW1wb3J0YW50O1xuICAgICAgZm9udC1zaXplOiAxNHB4ICFpbXBvcnRhbnQgO1xuICAgICAgY29sb3I6IHJnYmEoMCwgMCwgMCwgMC41KSAhaW1wb3J0YW50O1xuXG4gICAgICBzdmcge1xuICAgICAgICBtYXJnaW4tcmlnaHQ6IDVweDtcbiAgICAgIH1cbiAgICB9XG4gIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0= */</style><style>.WeMhfmnyjZApMUugIiUr {
  width: 100%;
  top: 0;
  left: 0;
  right: 0;
  display: flex;
  align-items: center;
  flex-direction: column;
  position: absolute;
  z-index: 2;
  font-family: OpenSans-Bold, OpenSans;
}
.WeMhfmnyjZApMUugIiUr .D5xruGoBdBD8fjbDpn0T {
  width: 100%;
  height: 21px;
  border-top-left-radius: 8px;
  border-top-right-radius: 8px;
  display: flex;
  align-items: center;
  position: relative;
  color: #ffffff;
}
.WeMhfmnyjZApMUugIiUr .D5xruGoBdBD8fjbDpn0T .z568v0OExVt7aKAe_qwb {
  position: absolute;
  left: 10px;
  width: 15px;
  height: 15px;
}
.WeMhfmnyjZApMUugIiUr .D5xruGoBdBD8fjbDpn0T .z568v0OExVt7aKAe_qwb g {
  fill: antiquewhite;
}
.WeMhfmnyjZApMUugIiUr .D5xruGoBdBD8fjbDpn0T .YvPjV_lQ9LjrwsRvkSAx {
  flex: 1;
  text-align: center;
}
.WeMhfmnyjZApMUugIiUr .D5xruGoBdBD8fjbDpn0T .w9aSxjg6VdZA_08E8a_P {
  min-width: 45px;
  height: 21px;
  position: absolute;
  right: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #11bc57;
  border-top-right-radius: 8px;
  border-left: 1px solid #00b050;
}
.WeMhfmnyjZApMUugIiUr .p5jxubOfKVHADwdR4sVq {
  background: #2acc6f;
}
.WeMhfmnyjZApMUugIiUr .BiGR8PrJwIl3jPvAzTRy {
  background: #fb5b28;
}
.WeMhfmnyjZApMUugIiUr .ddn6LFwb35gnBPJ__Ma4 {
  display: none;
  width: 98%;
  height: 32px;
  box-shadow: 0px 5px 5px -3px rgba(0, 0, 0, 0.08), 0px 3px 14px 2px rgba(0, 0, 0, 0.04), 0px 8px 10px 1px rgba(0, 0, 0, 0.06);
  border-radius: 4px;
  margin-top: 6px;
  font-size: 12px;
  font-family: OpenSans-Bold, OpenSans;
  font-weight: bold;
  color: #ffffff;
  line-height: 17px;
}
.WeMhfmnyjZApMUugIiUr .ddn6LFwb35gnBPJ__Ma4 svg {
  margin-right: 8px;
}

/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL3NyYy9jb21wb25lbnRzL25vdEJhY2tncm91bmQvYWUvcHJvZHVjdERPTS5tb2R1bGUubGVzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUF1REE7RUFDRSxXQUFBO0VBR0EsTUFBQTtFQUNBLE9BQUE7RUFDQSxRQUFBO0VBRUEsYUFBQTtFQUNBLG1CQUFBO0VBQ0Esc0JBQUE7RUFFQSxrQkFBQTtFQUNBLFVBQUE7RUFDQSxvQ0FBQTtBQTFERjtBQTRDQTtFQWlCSSxXQUFBO0VBQ0EsWUFBQTtFQUNBLDJCQUFBO0VBQ0EsNEJBQUE7RUFFQSxhQUFBO0VBQ0EsbUJBQUE7RUFDQSxrQkFBQTtFQUVBLGNBQUE7QUE1REo7QUFrQ0E7RUFpQ00sa0JBQUE7RUFDQSxVQUFBO0VBQ0EsV0FBQTtFQUNBLFlBQUE7QUFoRU47QUE0QkE7RUFzQ1Esa0JBQUE7QUEvRFI7QUF5QkE7RUEyQ00sT0FBQTtFQUNBLGtCQUFBO0FBakVOO0FBcUJBO0VBZ0RNLGVBQUE7RUFDQSxZQUFBO0VBRUEsa0JBQUE7RUFDQSxRQUFBO0VBRUEsYUFBQTtFQUNBLHVCQUFBO0VBQ0EsbUJBQUE7RUFFQSx5QkFBQTtFQUNBLDRCQUFBO0VBQ0EsOEJBQUE7QUFyRU47QUFTQTtFQWlFSSxtQkFBQTtBQXZFSjtBQU1BO0VBcUVJLG1CQUFBO0FBeEVKO0FBR0E7RUF5RUksYUFBQTtFQUNBLFVBQUE7RUFDQSxZQUFBO0VBQ0EsNEhBQUE7RUFFQSxrQkFBQTtFQUNBLGVBQUE7RUFFQSxlQUFBO0VBQ0Esb0NBQUE7RUFDQSxpQkFBQTtFQUNBLGNBQUE7RUFDQSxpQkFBQTtBQTNFSjtBQVZBO0VBd0ZNLGlCQUFBO0FBM0VOIiwic291cmNlc0NvbnRlbnQiOlsiLy8gQGZvbnQtZmFjZSB7XG4vLyAgIGZvbnQtZmFtaWx5OiBcIkhlbHZldGljYVwiO1xuLy8gICBzcmM6IHVybChcImh0dHBzOi8vaW1nLmRzZXJzLmNvbS9mb250L1VCLUhlbHZldGljYS50dGZcIik7XG4vLyB9XG5cbi8vIEBmb250LWZhY2Uge1xuLy8gICBmb250LWZhbWlseTogXCJPcGVuU2Fucy1SZWd1bGFyXCI7XG4vLyAgIHNyYzogdXJsKFwiaHR0cHM6Ly9pbWcuZHNlcnMuY29tL2ZvbnQvT3BlblNhbnMtUmVndWxhci50dGZcIik7XG4vLyB9XG5cbi8vIEBmb250LWZhY2Uge1xuLy8gICBmb250LWZhbWlseTogXCJPcGVuU2Fucy1Cb2xkXCI7XG4vLyAgIHNyYzogdXJsKFwiaHR0cHM6Ly9pbWcuZHNlcnMuY29tL2ZvbnQvT3BlblNhbnMtQm9sZC50dGZcIik7XG4vLyB9XG5cbi8vIEBmb250LWZhY2Uge1xuLy8gICBmb250LWZhbWlseTogXCJPcGVuU2Fucy1TZW1pQm9sZFwiO1xuLy8gICBzcmM6IHVybChcImh0dHBzOi8vaW1nLmRzZXJzLmNvbS9mb250L09wZW5TYW5zLVNlbWlCb2xkLnR0ZlwiKTtcbi8vIH1cblxuLy8gQGZvbnQtZmFjZSB7XG4vLyAgIGZvbnQtZmFtaWx5OiBcIkhlbHZldGljYU5ldWUtQm9sZFwiO1xuLy8gICBzcmM6IHVybChcImh0dHBzOi8vaW1nLmRzZXJzLmNvbS9mb250L0hlbHZldGljYU5ldWUtQm9sZC5vdGZcIik7XG4vLyB9XG5cbi8vIEBmb250LWZhY2Uge1xuLy8gICBmb250LWZhbWlseTogXCJwc2xcIjtcbi8vICAgc3JjOiB1cmwoXCJodHRwczovL2ltZy5kc2Vycy5jb20vZm9udC9QU0wwMDJTUC50dGZcIik7XG4vLyB9XG5cbi8vIEBmb250LWZhY2Uge1xuLy8gICBmb250LWZhbWlseTogXCJBcmlhbC1Cb2xkTVRcIjtcbi8vICAgc3JjOiB1cmwoXCJodHRwczovL2ltZy5kc2Vycy5jb20vZm9udC9BcmlhbC1Cb2xkTVQub3RmXCIpO1xuLy8gfVxuXG4vLyBAZm9udC1mYWNlIHtcbi8vICAgZm9udC1mYW1pbHk6IFwiUnViaWstQm9sZEl0YWxpY1wiO1xuLy8gICBzcmM6IHVybChcImh0dHBzOi8vaW1nLmRzZXJzLmNvbS9mb250L1J1YmlrLUJvbGRJdGFsaWMudHRmXCIpO1xuLy8gfVxuXG4vLyBAZm9udC1mYWNlIHtcbi8vICAgZm9udC1mYW1pbHk6IFwiUnViaWstUmVndWxhclwiO1xuLy8gICBzcmM6IHVybChcImh0dHBzOi8vaW1nLmRzZXJzLmNvbS9mb250L1J1YmlrLVJlZ3VsYXIudHRmXCIpO1xuLy8gfVxuXG4vLyBAZm9udC1mYWNlIHtcbi8vICAgZm9udC1mYW1pbHk6IFwiUnViaWstQm9sZFwiO1xuLy8gICBzcmM6IHVybChcImh0dHBzOi8vaW1nLmRzZXJzLmNvbS9mb250L1J1YmlrLUJvbGQudHRmXCIpO1xuLy8gfVxuXG4vLyBAZm9udC1mYWNlIHtcbi8vICAgZm9udC1mYW1pbHk6IFwiVWJ1bnR1LUJvbGRcIjtcbi8vICAgc3JjOiB1cmwoXCJodHRwczovL2ltZy5kc2Vycy5jb20vZm9udC9VYnVudHUtQm9sZC50dGZcIik7XG4vLyB9XG5cbi5pbXBvcnRfcHJvZHVjdF9idXR0b24ge1xuICB3aWR0aDogMTAwJTtcbiAgLy8gYm9yZGVyOiAxcHggc29saWQgc2FsbW9uO1xuICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gIHRvcDogMDtcbiAgbGVmdDogMDtcbiAgcmlnaHQ6IDA7XG5cbiAgZGlzcGxheTogZmxleDtcbiAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcblxuICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gIHotaW5kZXg6IDI7XG4gIGZvbnQtZmFtaWx5OiBPcGVuU2Fucy1Cb2xkLCBPcGVuU2FucztcblxuICAuaGVhZGVyIHtcbiAgICB3aWR0aDogMTAwJTtcbiAgICBoZWlnaHQ6IDIxcHg7XG4gICAgYm9yZGVyLXRvcC1sZWZ0LXJhZGl1czogOHB4O1xuICAgIGJvcmRlci10b3AtcmlnaHQtcmFkaXVzOiA4cHg7XG5cbiAgICBkaXNwbGF5OiBmbGV4O1xuICAgIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gICAgcG9zaXRpb246IHJlbGF0aXZlO1xuXG4gICAgY29sb3I6ICNmZmZmZmY7XG5cbiAgICAvLyBib3gtc2hhZG93OiAwcHggNXB4IDVweCAtM3B4IHJnYmEoMCwgMCwgMCwgMC4wOCksXG4gICAgLy8gICAwcHggM3B4IDE0cHggMnB4IHJnYmEoMCwgMCwgMCwgMC4wNCksIDBweCA4cHggMTBweCAxcHggcmdiYSgwLCAwLCAwLCAwLjA2KTtcbiAgICAvLyBib3JkZXItcmFkaXVzOiA0cHg7XG5cbiAgICAuaWNvbiB7XG4gICAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgICBsZWZ0OiAxMHB4O1xuICAgICAgd2lkdGg6IDE1cHg7XG4gICAgICBoZWlnaHQ6IDE1cHg7XG4gICAgICBnIHtcbiAgICAgICAgZmlsbDogYW50aXF1ZXdoaXRlO1xuICAgICAgfVxuICAgIH1cblxuICAgIC50aXRsZSB7XG4gICAgICBmbGV4OiAxO1xuICAgICAgdGV4dC1hbGlnbjogY2VudGVyO1xuICAgIH1cblxuICAgIC5wcmljZSB7XG4gICAgICBtaW4td2lkdGg6IDQ1cHg7XG4gICAgICBoZWlnaHQ6IDIxcHg7XG5cbiAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgIHJpZ2h0OiAwO1xuXG4gICAgICBkaXNwbGF5OiBmbGV4O1xuICAgICAganVzdGlmeS1jb250ZW50OiBjZW50ZXI7XG4gICAgICBhbGlnbi1pdGVtczogY2VudGVyO1xuXG4gICAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjMTFiYzU3O1xuICAgICAgYm9yZGVyLXRvcC1yaWdodC1yYWRpdXM6IDhweDtcbiAgICAgIGJvcmRlci1sZWZ0OiAxcHggc29saWQgIzAwYjA1MDtcbiAgICB9XG4gIH1cblxuICAuc3VjY2VlZCB7XG4gICAgYmFja2dyb3VuZDogcmdiKDQyLCAyMDQsIDExMSk7XG4gIH1cblxuICAuZXJyb3Ige1xuICAgIGJhY2tncm91bmQ6IHJnYigyNTEsIDkxLCA0MCk7XG4gIH1cblxuICAuYnV0dG9uIHtcbiAgICBkaXNwbGF5OiBub25lO1xuICAgIHdpZHRoOiA5OCU7XG4gICAgaGVpZ2h0OiAzMnB4O1xuICAgIGJveC1zaGFkb3c6IDBweCA1cHggNXB4IC0zcHggcmdiYSgwLCAwLCAwLCAwLjA4KSxcbiAgICAgIDBweCAzcHggMTRweCAycHggcmdiYSgwLCAwLCAwLCAwLjA0KSwgMHB4IDhweCAxMHB4IDFweCByZ2JhKDAsIDAsIDAsIDAuMDYpO1xuICAgIGJvcmRlci1yYWRpdXM6IDRweDtcbiAgICBtYXJnaW4tdG9wOiA2cHg7XG5cbiAgICBmb250LXNpemU6IDEycHg7XG4gICAgZm9udC1mYW1pbHk6IE9wZW5TYW5zLUJvbGQsIE9wZW5TYW5zO1xuICAgIGZvbnQtd2VpZ2h0OiBib2xkO1xuICAgIGNvbG9yOiAjZmZmZmZmO1xuICAgIGxpbmUtaGVpZ2h0OiAxN3B4O1xuXG4gICAgc3ZnIHtcbiAgICAgIG1hcmdpbi1yaWdodDogOHB4O1xuICAgIH1cbiAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ== */</style><style>.vsK1fKu8GYkRlcoudhIh {
  width: 100%;
  top: 0;
  left: 0;
  right: 0;
  display: flex;
  align-items: center;
  flex-direction: column;
  position: absolute;
  z-index: 2;
  font-family: OpenSans-Bold, OpenSans;
}
.vsK1fKu8GYkRlcoudhIh .kNT2mFuNFTBP9Hi7bAC8 {
  width: 100%;
  height: 21px;
  border-top-left-radius: 8px;
  border-top-right-radius: 8px;
  display: flex;
  align-items: center;
  position: relative;
  color: #ffffff;
}
.vsK1fKu8GYkRlcoudhIh .kNT2mFuNFTBP9Hi7bAC8 .mZYCnZhor58rYAUqK4ng {
  position: absolute;
  left: 10px;
  width: 15px;
  height: 15px;
}
.vsK1fKu8GYkRlcoudhIh .kNT2mFuNFTBP9Hi7bAC8 .mZYCnZhor58rYAUqK4ng g {
  fill: antiquewhite;
}
.vsK1fKu8GYkRlcoudhIh .kNT2mFuNFTBP9Hi7bAC8 .ngtRvSjrm9yOTPcnJvii {
  flex: 1;
  text-align: center;
}
.vsK1fKu8GYkRlcoudhIh .kNT2mFuNFTBP9Hi7bAC8 .rd0GcjHkbm37tIo1UZkh {
  min-width: 45px;
  height: 21px;
  position: absolute;
  right: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #11bc57;
  border-top-right-radius: 8px;
  border-left: 1px solid #00b050;
}
.vsK1fKu8GYkRlcoudhIh .xqJbzeH_Z6QRQ9J1z5UV {
  background: #2acc6f;
}
.vsK1fKu8GYkRlcoudhIh .mmXPLYRJZx8YRhtuZOzD {
  background: #fb5b28;
}
.vsK1fKu8GYkRlcoudhIh .jaTHVmG4yPmCMGNQaqic {
  display: none;
  width: 98%;
  height: 32px;
  box-shadow: 0px 5px 5px -3px rgba(0, 0, 0, 0.08), 0px 3px 14px 2px rgba(0, 0, 0, 0.04), 0px 8px 10px 1px rgba(0, 0, 0, 0.06);
  border-radius: 4px;
  margin-top: 6px;
  font-size: 12px;
  font-family: OpenSans-Bold, OpenSans;
  font-weight: bold;
  color: #ffffff;
  line-height: 17px;
}
.vsK1fKu8GYkRlcoudhIh .jaTHVmG4yPmCMGNQaqic svg {
  margin-right: 8px;
}
.vsK1fKu8GYkRlcoudhIh .lXitMkUNrxq6Y3RWLqKg {
  position: absolute;
  top: 34px;
  left: 11px;
  z-index: 99999999;
}
.vsK1fKu8GYkRlcoudhIh .lXitMkUNrxq6Y3RWLqKg input {
  width: 18px;
  height: 18px;
}
.NlPS3pzpp0kyiw7u3qbU {
  width: 200px;
  height: 36px;
  background: #ff8f00;
  border-radius: 8px 8px 8px 8px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.NlPS3pzpp0kyiw7u3qbU > div {
  margin-right: 15px;
}
.NlPS3pzpp0kyiw7u3qbU button {
  background: #ff8f00;
  color: #ffffff;
}

/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL3NyYy9jb21wb25lbnRzL25vdEJhY2tncm91bmQvYWUvYWVMaXN0RG9tLm1vZHVsZS5sZXNzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQXVEQTtFQUNFLFdBQUE7RUFHQSxNQUFBO0VBQ0EsT0FBQTtFQUNBLFFBQUE7RUFFQSxhQUFBO0VBQ0EsbUJBQUE7RUFDQSxzQkFBQTtFQUVBLGtCQUFBO0VBQ0EsVUFBQTtFQUNBLG9DQUFBO0FBMURGO0FBNENBO0VBaUJJLFdBQUE7RUFDQSxZQUFBO0VBQ0EsMkJBQUE7RUFDQSw0QkFBQTtFQUVBLGFBQUE7RUFDQSxtQkFBQTtFQUNBLGtCQUFBO0VBRUEsY0FBQTtBQTVESjtBQWtDQTtFQWlDTSxrQkFBQTtFQUNBLFVBQUE7RUFDQSxXQUFBO0VBQ0EsWUFBQTtBQWhFTjtBQTRCQTtFQXNDUSxrQkFBQTtBQS9EUjtBQXlCQTtFQTJDTSxPQUFBO0VBQ0Esa0JBQUE7QUFqRU47QUFxQkE7RUFnRE0sZUFBQTtFQUNBLFlBQUE7RUFFQSxrQkFBQTtFQUNBLFFBQUE7RUFFQSxhQUFBO0VBQ0EsdUJBQUE7RUFDQSxtQkFBQTtFQUVBLHlCQUFBO0VBQ0EsNEJBQUE7RUFDQSw4QkFBQTtBQXJFTjtBQVNBO0VBaUVJLG1CQUFBO0FBdkVKO0FBTUE7RUFxRUksbUJBQUE7QUF4RUo7QUFHQTtFQXlFSSxhQUFBO0VBQ0EsVUFBQTtFQUNBLFlBQUE7RUFDQSw0SEFBQTtFQUVBLGtCQUFBO0VBQ0EsZUFBQTtFQUVBLGVBQUE7RUFDQSxvQ0FBQTtFQUNBLGlCQUFBO0VBQ0EsY0FBQTtFQUNBLGlCQUFBO0FBM0VKO0FBVkE7RUF3Rk0saUJBQUE7QUEzRU47QUFiQTtFQTZGSSxrQkFBQTtFQUNBLFNBQUE7RUFDQSxVQUFBO0VBQ0EsaUJBQUE7QUE3RUo7QUFuQkE7RUFrR00sV0FBQTtFQUNBLFlBQUE7QUE1RU47QUFpRkE7RUFDRSxZQUFBO0VBQ0EsWUFBQTtFQUNBLG1CQUFBO0VBQ0EsOEJBQUE7RUFDQSxhQUFBO0VBQ0EsbUJBQUE7RUFDQSx1QkFBQTtBQS9FRjtBQWlGRTtFQUNFLGtCQUFBO0FBL0VKO0FBcUVBO0VBYUksbUJBQUE7RUFDQSxjQUFBO0FBL0VKIiwic291cmNlc0NvbnRlbnQiOlsiLy8gQGZvbnQtZmFjZSB7XG4vLyAgIGZvbnQtZmFtaWx5OiBcIkhlbHZldGljYVwiO1xuLy8gICBzcmM6IHVybChcImh0dHBzOi8vaW1nLmRzZXJzLmNvbS9mb250L1VCLUhlbHZldGljYS50dGZcIik7XG4vLyB9XG5cbi8vIEBmb250LWZhY2Uge1xuLy8gICBmb250LWZhbWlseTogXCJPcGVuU2Fucy1SZWd1bGFyXCI7XG4vLyAgIHNyYzogdXJsKFwiaHR0cHM6Ly9pbWcuZHNlcnMuY29tL2ZvbnQvT3BlblNhbnMtUmVndWxhci50dGZcIik7XG4vLyB9XG5cbi8vIEBmb250LWZhY2Uge1xuLy8gICBmb250LWZhbWlseTogXCJPcGVuU2Fucy1Cb2xkXCI7XG4vLyAgIHNyYzogdXJsKFwiaHR0cHM6Ly9pbWcuZHNlcnMuY29tL2ZvbnQvT3BlblNhbnMtQm9sZC50dGZcIik7XG4vLyB9XG5cbi8vIEBmb250LWZhY2Uge1xuLy8gICBmb250LWZhbWlseTogXCJPcGVuU2Fucy1TZW1pQm9sZFwiO1xuLy8gICBzcmM6IHVybChcImh0dHBzOi8vaW1nLmRzZXJzLmNvbS9mb250L09wZW5TYW5zLVNlbWlCb2xkLnR0ZlwiKTtcbi8vIH1cblxuLy8gQGZvbnQtZmFjZSB7XG4vLyAgIGZvbnQtZmFtaWx5OiBcIkhlbHZldGljYU5ldWUtQm9sZFwiO1xuLy8gICBzcmM6IHVybChcImh0dHBzOi8vaW1nLmRzZXJzLmNvbS9mb250L0hlbHZldGljYU5ldWUtQm9sZC5vdGZcIik7XG4vLyB9XG5cbi8vIEBmb250LWZhY2Uge1xuLy8gICBmb250LWZhbWlseTogXCJwc2xcIjtcbi8vICAgc3JjOiB1cmwoXCJodHRwczovL2ltZy5kc2Vycy5jb20vZm9udC9QU0wwMDJTUC50dGZcIik7XG4vLyB9XG5cbi8vIEBmb250LWZhY2Uge1xuLy8gICBmb250LWZhbWlseTogXCJBcmlhbC1Cb2xkTVRcIjtcbi8vICAgc3JjOiB1cmwoXCJodHRwczovL2ltZy5kc2Vycy5jb20vZm9udC9BcmlhbC1Cb2xkTVQub3RmXCIpO1xuLy8gfVxuXG4vLyBAZm9udC1mYWNlIHtcbi8vICAgZm9udC1mYW1pbHk6IFwiUnViaWstQm9sZEl0YWxpY1wiO1xuLy8gICBzcmM6IHVybChcImh0dHBzOi8vaW1nLmRzZXJzLmNvbS9mb250L1J1YmlrLUJvbGRJdGFsaWMudHRmXCIpO1xuLy8gfVxuXG4vLyBAZm9udC1mYWNlIHtcbi8vICAgZm9udC1mYW1pbHk6IFwiUnViaWstUmVndWxhclwiO1xuLy8gICBzcmM6IHVybChcImh0dHBzOi8vaW1nLmRzZXJzLmNvbS9mb250L1J1YmlrLVJlZ3VsYXIudHRmXCIpO1xuLy8gfVxuXG4vLyBAZm9udC1mYWNlIHtcbi8vICAgZm9udC1mYW1pbHk6IFwiUnViaWstQm9sZFwiO1xuLy8gICBzcmM6IHVybChcImh0dHBzOi8vaW1nLmRzZXJzLmNvbS9mb250L1J1YmlrLUJvbGQudHRmXCIpO1xuLy8gfVxuXG4vLyBAZm9udC1mYWNlIHtcbi8vICAgZm9udC1mYW1pbHk6IFwiVWJ1bnR1LUJvbGRcIjtcbi8vICAgc3JjOiB1cmwoXCJodHRwczovL2ltZy5kc2Vycy5jb20vZm9udC9VYnVudHUtQm9sZC50dGZcIik7XG4vLyB9XG5cbi5pbXBvcnRfcHJvZHVjdF9idXR0b24ge1xuICB3aWR0aDogMTAwJTtcbiAgLy8gYm9yZGVyOiAxcHggc29saWQgc2FsbW9uO1xuICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gIHRvcDogMDtcbiAgbGVmdDogMDtcbiAgcmlnaHQ6IDA7XG5cbiAgZGlzcGxheTogZmxleDtcbiAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcblxuICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gIHotaW5kZXg6IDI7XG4gIGZvbnQtZmFtaWx5OiBPcGVuU2Fucy1Cb2xkLCBPcGVuU2FucztcblxuICAuaGVhZGVyIHtcbiAgICB3aWR0aDogMTAwJTtcbiAgICBoZWlnaHQ6IDIxcHg7XG4gICAgYm9yZGVyLXRvcC1sZWZ0LXJhZGl1czogOHB4O1xuICAgIGJvcmRlci10b3AtcmlnaHQtcmFkaXVzOiA4cHg7XG5cbiAgICBkaXNwbGF5OiBmbGV4O1xuICAgIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gICAgcG9zaXRpb246IHJlbGF0aXZlO1xuXG4gICAgY29sb3I6ICNmZmZmZmY7XG5cbiAgICAvLyBib3gtc2hhZG93OiAwcHggNXB4IDVweCAtM3B4IHJnYmEoMCwgMCwgMCwgMC4wOCksXG4gICAgLy8gICAwcHggM3B4IDE0cHggMnB4IHJnYmEoMCwgMCwgMCwgMC4wNCksIDBweCA4cHggMTBweCAxcHggcmdiYSgwLCAwLCAwLCAwLjA2KTtcbiAgICAvLyBib3JkZXItcmFkaXVzOiA0cHg7XG5cbiAgICAuaWNvbiB7XG4gICAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgICBsZWZ0OiAxMHB4O1xuICAgICAgd2lkdGg6IDE1cHg7XG4gICAgICBoZWlnaHQ6IDE1cHg7XG4gICAgICBnIHtcbiAgICAgICAgZmlsbDogYW50aXF1ZXdoaXRlO1xuICAgICAgfVxuICAgIH1cblxuICAgIC50aXRsZSB7XG4gICAgICBmbGV4OiAxO1xuICAgICAgdGV4dC1hbGlnbjogY2VudGVyO1xuICAgIH1cblxuICAgIC5wcmljZSB7XG4gICAgICBtaW4td2lkdGg6IDQ1cHg7XG4gICAgICBoZWlnaHQ6IDIxcHg7XG5cbiAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgIHJpZ2h0OiAwO1xuXG4gICAgICBkaXNwbGF5OiBmbGV4O1xuICAgICAganVzdGlmeS1jb250ZW50OiBjZW50ZXI7XG4gICAgICBhbGlnbi1pdGVtczogY2VudGVyO1xuXG4gICAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjMTFiYzU3O1xuICAgICAgYm9yZGVyLXRvcC1yaWdodC1yYWRpdXM6IDhweDtcbiAgICAgIGJvcmRlci1sZWZ0OiAxcHggc29saWQgIzAwYjA1MDtcbiAgICB9XG4gIH1cblxuICAuc3VjY2VlZCB7XG4gICAgYmFja2dyb3VuZDogcmdiKDQyLCAyMDQsIDExMSk7XG4gIH1cblxuICAuZXJyb3Ige1xuICAgIGJhY2tncm91bmQ6IHJnYigyNTEsIDkxLCA0MCk7XG4gIH1cblxuICAuYnV0dG9uIHtcbiAgICBkaXNwbGF5OiBub25lO1xuICAgIHdpZHRoOiA5OCU7XG4gICAgaGVpZ2h0OiAzMnB4O1xuICAgIGJveC1zaGFkb3c6IDBweCA1cHggNXB4IC0zcHggcmdiYSgwLCAwLCAwLCAwLjA4KSxcbiAgICAgIDBweCAzcHggMTRweCAycHggcmdiYSgwLCAwLCAwLCAwLjA0KSwgMHB4IDhweCAxMHB4IDFweCByZ2JhKDAsIDAsIDAsIDAuMDYpO1xuICAgIGJvcmRlci1yYWRpdXM6IDRweDtcbiAgICBtYXJnaW4tdG9wOiA2cHg7XG5cbiAgICBmb250LXNpemU6IDEycHg7XG4gICAgZm9udC1mYW1pbHk6IE9wZW5TYW5zLUJvbGQsIE9wZW5TYW5zO1xuICAgIGZvbnQtd2VpZ2h0OiBib2xkO1xuICAgIGNvbG9yOiAjZmZmZmZmO1xuICAgIGxpbmUtaGVpZ2h0OiAxN3B4O1xuXG4gICAgc3ZnIHtcbiAgICAgIG1hcmdpbi1yaWdodDogOHB4O1xuICAgIH1cbiAgfVxuXG4gIC5jaGVja2JveCB7XG4gICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgIHRvcDogMzRweDtcbiAgICBsZWZ0OiAxMXB4O1xuICAgIHotaW5kZXg6IDk5OTk5OTk5O1xuICAgIGlucHV0IHtcbiAgICAgIHdpZHRoOiAxOHB4O1xuICAgICAgaGVpZ2h0OiAxOHB4O1xuICAgIH1cbiAgfVxufVxuXG4uYWVMaXN0QmF0Y2hCdG5Cb3gge1xuICB3aWR0aDogMjAwcHg7XG4gIGhlaWdodDogMzZweDtcbiAgYmFja2dyb3VuZDogI2ZmOGYwMDtcbiAgYm9yZGVyLXJhZGl1czogOHB4IDhweCA4cHggOHB4O1xuICBkaXNwbGF5OiBmbGV4O1xuICBhbGlnbi1pdGVtczogY2VudGVyO1xuICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcblxuICAmID4gZGl2IHtcbiAgICBtYXJnaW4tcmlnaHQ6IDE1cHg7XG4gIH1cbiAgYnV0dG9uIHtcbiAgICBiYWNrZ3JvdW5kOiAjZmY4ZjAwO1xuICAgIGNvbG9yOiAjZmZmZmZmO1xuICB9XG59XG4iXSwic291cmNlUm9vdCI6IiJ9 */</style><script src="chrome-extension://bbaogjaeflnjolejjcpceoapngapnbaj/assets/operationBanner.js" type="module"></script><style>.opr-banner-ext{background-color:#fff}.opr-banner-ext-header{position:relative;z-index:2;width:100%;height:100%}.opr-banner-ext-middle{width:100%;height:200px;margin:8px 0;border-radius:8px;overflow:hidden}.opr-banner-ext-center{position:absolute;z-index:110;top:0;left:0;width:100%;height:100%;border-radius:8px;overflow:hidden}.opr-banner-ext-right_top,.opr-banner-ext-right_bottom,.opr-banner-ext-left{position:absolute;z-index:989;top:0;left:0;width:100%;height:100%;border-radius:8px;overflow:hidden}.opr-banner-ext-right_top.opr-banner-ext-aliexpress,.opr-banner-ext-right_bottom.opr-banner-ext-aliexpress,.opr-banner-ext-left.opr-banner-ext-aliexpress{border-radius:24px}.opr-banner-ext-footer{position:fixed;bottom:16px;left:50%;transform:translateX(-50%);height:120px;width:970px;z-index:9999;border-radius:8px;overflow:hidden}.opr-banner-ext-footer.opr-banner-ext-aliexpress{border-radius:16px}.opr-banner-ext-category.opr-banner-ext-header{position:relative;height:80px}.opr-banner-ext-wrap{position:relative;width:100%;height:100%}.opr-banner-ext-img{background-repeat:no-repeat;background-size:cover;display:block;width:100%;height:100%;background-position:center !important}.opr-banner-ext-close{position:absolute;width:28px;height:28px;top:4px;right:4px;z-index:3;color:#828282;cursor:pointer;font-size:28px;line-height:28px;display:flex;align-items:center;justify-content:center}.opr-banner-ext-russia_aliexpress.opr-banner-ext-header{position:relative;margin:12px auto 0;max-width:1384px;height:80px;width:initial;border-radius:6px;overflow:hidden}.opr-banner-ext-russia_aliexpress.opr-banner-ext-header.opr-banner-ext-category,.opr-banner-ext-russia_aliexpress.opr-banner-ext-header.opr-banner-ext-items{max-width:1224px}.opr-banner-ext-aliexpress.opr-banner-ext-header{position:relative;max-width:100%;height:80px;width:initial;overflow:hidden}.opr-banner-ext-aliexpress.opr-banner-ext-center{border-radius:24px}.opr-banner-ext-best_aliexpress.opr-banner-ext-header{position:relative;max-width:100%;height:80px;width:initial;overflow:hidden}</style></head>

<body id="fade" class="hold-transition login-page img-transition" style="background: url(&quot;/web-incidencias/src/assets/img/GRSD56.jpg&quot;) center center / cover no-repeat fixed;">
    <div class="login-box" style="margin: 4% auto; margin-bottom: 0px; margin-top: 0px; padding-top: 5%;width: 330px;">
        <div class="login-logo"> <img src="/web-incidencias/src/assets/img/usi-image.png" style="width: 125px; margin-bottom: 0px;"> </div>
        <div class="login-box-body" style="background: rgba(0, 0, 0, 0.7294);">
            <p class="login-box-msg" style="color: rgba(0, 197, 255, 0.8901);">Accede para iniciar sesión.</p>
            <form action="/web-incidencias/login/signin" method="post">
                <input type="password" style="display: none;" name="password" autocomplete="new-password">
                <div class="form-group has-feedback" style="margin-bottom: 25px;"> 
                    <input type="email" class="form-control" name="email" placeholder="Email" style="background-color: #0000008a; color: #eee;" value=""> <span class="glyphicon glyphicon-envelope form-control-feedback"></span> </div>
                <div class="form-group has-feedback" style="margin-bottom: 25px;"> <input type="password" class="form-control" name="pass" placeholder="Password" style="background-color: #0000008a; color: #eee;" value=""> <span class="glyphicon glyphicon-lock form-control-feedback"></span> </div>
                <div class="row" style="margin-bottom: 15px;">
                    <div class="col-xs-7">
                        <div class="checkbox icheck"> <label style="color: #a8a8a8;"> <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input name="chkb" type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Recuérdame </label> </div>
                    </div>
                    <div class="col-xs-5"> <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar sesión</button> </div>
                </div>
            </form> <span style="font-weight: lighter; color: #fff">¿No eres miembro? <a href="/web-incidencias/register" class="text-center" style="font-weight: normal;">Regístrate aquí</a></span>
        </div>
        
    </div>
    <script src="/web-incidencias/src/js/jquery.min.js"></script>
    <script src="/web-incidencias/src/js/bootstrap.min.js"></script>
    <script src="/web-incidencias/src/js/icheck.min.js"></script>
    <script>
        $(function() {
            $("input").iCheck({
                checkboxClass: "icheckbox_square-blue",
                radioClass: "iradio_square-blue",
                increaseArea: "20%"
            })
        }), $(function() {
            $("#author").html("Desarrollador: Jhon Alvarado Achata")
        });
    </script>
    <script type="text/javascript">
        var bgImageArray = [];
        bgImageArray[0] = "/web-incidencias/src/assets/img/SPL60N.jpg", bgImageArray[1] = "/web-incidencias/src/assets/img/D48DW1.jpg", bgImageArray[2] = "/web-incidencias/src/assets/img/GRSD56.jpg";
        var random = Math.floor(3 * Math.random()) + 0;
        document.getElementById("fade").style.background = "url(" + bgImageArray[random] + ") no-repeat center center fixed", document.getElementById("fade").style.backgroundSize = "cover";
        var opacity = 0,
            intervalID = 0;

        function fadeOut() {
            intervalID = setInterval(hide, 20)
        }

        function fadeIn() {
            intervalID = setInterval(show, 20)
        }

        function show() {
            var e = document.getElementById("fade");
            (opacity = Number(window.getComputedStyle(e).getPropertyValue("opacity"))) < 1 ? (opacity += .1, e.style.opacity = opacity, console.log(opacity)) : clearInterval(intervalID)
        }

        function hide() {
            var e = document.getElementById("fade");
            (opacity = Number(window.getComputedStyle(e).getPropertyValue("opacity"))) > 0 ? (opacity -= .1, e.style.opacity = opacity, console.log(opacity)) : clearInterval(intervalID)
        }
    </script>


<div id="crx-root"><div role="region" aria-label="Notifications (F8)" tabindex="-1" style="pointer-events: none;"><ol tabindex="-1" class="fixed top-0 z-[9999] flex max-h-screen w-full flex-col-reverse p-4 sm:right-0 sm:flex-col md:max-w-[420px]"></ol></div></div><div id="kins-kins-popup" style="color-scheme: initial; forced-color-adjust: initial; mask: initial; math-depth: initial; position: initial; position-anchor: initial; text-size-adjust: initial; appearance: initial; color: initial; direction: ltr; font-family: Rubik, sans-serif; font-feature-settings: initial; font-kerning: initial; font-optical-sizing: initial; font-palette: initial; font-size: medium; font-size-adjust: initial; font-stretch: initial; font-style: initial; font-synthesis: initial; font-variant: initial; font-variation-settings: initial; font-weight: initial; position-area: initial; text-orientation: initial; text-rendering: initial; text-spacing-trim: initial; -webkit-font-smoothing: initial; -webkit-locale: initial; -webkit-text-orientation: initial; -webkit-writing-mode: initial; writing-mode: initial; zoom: initial; accent-color: initial; place-content: initial; place-items: initial; place-self: initial; alignment-baseline: initial; anchor-name: initial; anchor-scope: initial; animation-composition: initial; animation: initial; app-region: initial; aspect-ratio: initial; backdrop-filter: initial; backface-visibility: initial; background: none; background-blend-mode: initial; baseline-shift: initial; baseline-source: initial; block-size: initial; border-block: initial; border: none; border-radius: initial; border-collapse: initial; border-end-end-radius: initial; border-end-start-radius: initial; border-inline: initial; border-start-end-radius: initial; border-start-start-radius: initial; inset: initial; box-decoration-break: initial; box-shadow: initial; box-sizing: border-box; break-after: initial; break-before: initial; break-inside: initial; buffered-rendering: initial; caption-side: initial; caret-color: initial; clear: initial; clip: initial; clip-path: initial; clip-rule: initial; color-interpolation: initial; color-interpolation-filters: initial; color-rendering: initial; columns: initial; column-fill: initial; gap: initial; column-rule: initial; column-span: initial; contain: initial; contain-intrinsic-block-size: initial; contain-intrinsic-size: initial; contain-intrinsic-inline-size: initial; container: initial; content: initial; content-visibility: initial; counter-increment: initial; counter-reset: initial; counter-set: initial; cursor: initial; cx: initial; cy: initial; d: initial; display: block; dominant-baseline: initial; empty-cells: initial; field-sizing: initial; fill: initial; fill-opacity: initial; fill-rule: initial; filter: initial; flex: initial; flex-flow: initial; float: initial; flood-color: initial; flood-opacity: initial; grid: initial; grid-area: initial; height: auto; hyphenate-character: initial; hyphenate-limit-chars: initial; hyphens: initial; image-orientation: initial; image-rendering: initial; initial-letter: initial; inline-size: initial; inset-block: initial; inset-inline: initial; interpolate-size: initial; isolation: initial; letter-spacing: initial; lighting-color: initial; line-break: initial; line-height: normal; list-style: initial; margin-block: initial; margin: 0px; margin-inline: initial; marker: initial; mask-type: initial; math-shift: initial; math-style: initial; max-block-size: initial; max-height: initial; max-inline-size: initial; max-width: initial; min-block-size: initial; min-height: initial; min-inline-size: initial; min-width: initial; mix-blend-mode: initial; object-fit: initial; object-position: initial; object-view-box: initial; offset: initial; opacity: initial; order: initial; orphans: initial; outline: initial; outline-offset: initial; overflow-anchor: initial; overflow-clip-margin: initial; overflow-wrap: initial; overflow: initial; overlay: initial; overscroll-behavior-block: none; overscroll-behavior-inline: none; overscroll-behavior: none; padding-block: initial; padding: 0px; padding-inline: initial; page: initial; page-orientation: initial; paint-order: initial; perspective: initial; perspective-origin: initial; pointer-events: initial; position-try: initial; position-visibility: initial; quotes: initial; r: initial; resize: initial; rotate: initial; ruby-align: initial; ruby-position: initial; rx: initial; ry: initial; scale: initial; scroll-behavior: initial; scroll-margin-block: initial; scroll-margin: initial; scroll-margin-inline: initial; scroll-padding-block: initial; scroll-padding: initial; scroll-padding-inline: initial; scroll-snap-align: initial; scroll-snap-stop: initial; scroll-snap-type: initial; scroll-timeline: initial; scrollbar-color: initial; scrollbar-gutter: initial; scrollbar-width: initial; shape-image-threshold: initial; shape-margin: initial; shape-outside: initial; shape-rendering: initial; size: initial; speak: initial; stop-color: initial; stop-opacity: initial; stroke: initial; stroke-dasharray: initial; stroke-dashoffset: initial; stroke-linecap: initial; stroke-linejoin: initial; stroke-miterlimit: initial; stroke-opacity: initial; stroke-width: initial; tab-size: initial; table-layout: initial; text-align: left; text-align-last: initial; text-anchor: initial; text-combine-upright: initial; text-decoration: none; text-decoration-skip-ink: initial; text-emphasis: initial; text-emphasis-position: initial; text-indent: initial; text-overflow: initial; text-shadow: initial; text-transform: initial; text-underline-offset: initial; text-underline-position: initial; text-wrap: wrap; timeline-scope: initial; touch-action: initial; transform: initial; transform-box: initial; transform-origin: initial; transform-style: initial; transition: initial; translate: initial; user-select: initial; vector-effect: initial; vertical-align: initial; view-timeline: initial; view-transition-class: initial; view-transition-name: initial; visibility: initial; border-spacing: initial; -webkit-box-align: initial; -webkit-box-decoration-break: initial; -webkit-box-direction: initial; -webkit-box-flex: initial; -webkit-box-ordinal-group: initial; -webkit-box-orient: initial; -webkit-box-pack: initial; -webkit-box-reflect: initial; -webkit-line-break: initial; -webkit-line-clamp: initial; -webkit-mask-box-image: initial; -webkit-print-color-adjust: initial; -webkit-rtl-ordering: initial; -webkit-ruby-position: initial; -webkit-tap-highlight-color: initial; -webkit-text-combine: initial; -webkit-text-decorations-in-effect: initial; -webkit-text-fill-color: initial; -webkit-text-security: initial; -webkit-text-stroke: initial; -webkit-user-drag: initial; white-space-collapse: collapse; widows: initial; width: auto; will-change: initial; word-break: initial; word-spacing: initial; x: initial; y: initial; z-index: initial;"><div id="kins_root" style="color-scheme: initial; forced-color-adjust: initial; mask: initial; math-depth: initial; position: initial; position-anchor: initial; text-size-adjust: initial; appearance: initial; color: initial; direction: ltr; font-family: Rubik, sans-serif; font-feature-settings: initial; font-kerning: initial; font-optical-sizing: initial; font-palette: initial; font-size: medium; font-size-adjust: initial; font-stretch: initial; font-style: initial; font-synthesis: initial; font-variant: initial; font-variation-settings: initial; font-weight: initial; position-area: initial; text-orientation: initial; text-rendering: initial; text-spacing-trim: initial; -webkit-font-smoothing: initial; -webkit-locale: initial; -webkit-text-orientation: initial; -webkit-writing-mode: initial; writing-mode: initial; zoom: initial; accent-color: initial; place-content: initial; place-items: initial; place-self: initial; alignment-baseline: initial; anchor-name: initial; anchor-scope: initial; animation-composition: initial; animation: initial; app-region: initial; aspect-ratio: initial; backdrop-filter: initial; backface-visibility: initial; background: none; background-blend-mode: initial; baseline-shift: initial; baseline-source: initial; block-size: initial; border-block: initial; border: none; border-radius: initial; border-collapse: initial; border-end-end-radius: initial; border-end-start-radius: initial; border-inline: initial; border-start-end-radius: initial; border-start-start-radius: initial; inset: initial; box-decoration-break: initial; box-shadow: initial; box-sizing: border-box; break-after: initial; break-before: initial; break-inside: initial; buffered-rendering: initial; caption-side: initial; caret-color: initial; clear: initial; clip: initial; clip-path: initial; clip-rule: initial; color-interpolation: initial; color-interpolation-filters: initial; color-rendering: initial; columns: initial; column-fill: initial; gap: initial; column-rule: initial; column-span: initial; contain: initial; contain-intrinsic-block-size: initial; contain-intrinsic-size: initial; contain-intrinsic-inline-size: initial; container: initial; content: initial; content-visibility: initial; counter-increment: initial; counter-reset: initial; counter-set: initial; cursor: initial; cx: initial; cy: initial; d: initial; display: block; dominant-baseline: initial; empty-cells: initial; field-sizing: initial; fill: initial; fill-opacity: initial; fill-rule: initial; filter: initial; flex: initial; flex-flow: initial; float: initial; flood-color: initial; flood-opacity: initial; grid: initial; grid-area: initial; height: auto; hyphenate-character: initial; hyphenate-limit-chars: initial; hyphens: initial; image-orientation: initial; image-rendering: initial; initial-letter: initial; inline-size: initial; inset-block: initial; inset-inline: initial; interpolate-size: initial; isolation: initial; letter-spacing: initial; lighting-color: initial; line-break: initial; line-height: normal; list-style: initial; margin-block: initial; margin: 0px; margin-inline: initial; marker: initial; mask-type: initial; math-shift: initial; math-style: initial; max-block-size: initial; max-height: initial; max-inline-size: initial; max-width: initial; min-block-size: initial; min-height: initial; min-inline-size: initial; min-width: initial; mix-blend-mode: initial; object-fit: initial; object-position: initial; object-view-box: initial; offset: initial; opacity: initial; order: initial; orphans: initial; outline: initial; outline-offset: initial; overflow-anchor: initial; overflow-clip-margin: initial; overflow-wrap: initial; overflow: initial; overlay: initial; overscroll-behavior-block: none; overscroll-behavior-inline: none; overscroll-behavior: none; padding-block: initial; padding: 0px; padding-inline: initial; page: initial; page-orientation: initial; paint-order: initial; perspective: initial; perspective-origin: initial; pointer-events: initial; position-try: initial; position-visibility: initial; quotes: initial; r: initial; resize: initial; rotate: initial; ruby-align: initial; ruby-position: initial; rx: initial; ry: initial; scale: initial; scroll-behavior: initial; scroll-margin-block: initial; scroll-margin: initial; scroll-margin-inline: initial; scroll-padding-block: initial; scroll-padding: initial; scroll-padding-inline: initial; scroll-snap-align: initial; scroll-snap-stop: initial; scroll-snap-type: initial; scroll-timeline: initial; scrollbar-color: initial; scrollbar-gutter: initial; scrollbar-width: initial; shape-image-threshold: initial; shape-margin: initial; shape-outside: initial; shape-rendering: initial; size: initial; speak: initial; stop-color: initial; stop-opacity: initial; stroke: initial; stroke-dasharray: initial; stroke-dashoffset: initial; stroke-linecap: initial; stroke-linejoin: initial; stroke-miterlimit: initial; stroke-opacity: initial; stroke-width: initial; tab-size: initial; table-layout: initial; text-align: left; text-align-last: initial; text-anchor: initial; text-combine-upright: initial; text-decoration: none; text-decoration-skip-ink: initial; text-emphasis: initial; text-emphasis-position: initial; text-indent: initial; text-overflow: initial; text-shadow: initial; text-transform: initial; text-underline-offset: initial; text-underline-position: initial; text-wrap: wrap; timeline-scope: initial; touch-action: initial; transform: initial; transform-box: initial; transform-origin: initial; transform-style: initial; transition: initial; translate: initial; user-select: initial; vector-effect: initial; vertical-align: initial; view-timeline: initial; view-transition-class: initial; view-transition-name: initial; visibility: initial; border-spacing: initial; -webkit-box-align: initial; -webkit-box-decoration-break: initial; -webkit-box-direction: initial; -webkit-box-flex: initial; -webkit-box-ordinal-group: initial; -webkit-box-orient: initial; -webkit-box-pack: initial; -webkit-box-reflect: initial; -webkit-line-break: initial; -webkit-line-clamp: initial; -webkit-mask-box-image: initial; -webkit-print-color-adjust: initial; -webkit-rtl-ordering: initial; -webkit-ruby-position: initial; -webkit-tap-highlight-color: initial; -webkit-text-combine: initial; -webkit-text-decorations-in-effect: initial; -webkit-text-fill-color: initial; -webkit-text-security: initial; -webkit-text-stroke: initial; -webkit-user-drag: initial; white-space-collapse: collapse; widows: initial; width: auto; will-change: initial; word-break: initial; word-spacing: initial; x: initial; y: initial; z-index: initial;"></div></div></body></html>

?>