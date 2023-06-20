import { combineReducers } from "redux";
import counter, { counterSaga } from "./counter";
import sample, { sampleSaga } from "./sample";
import loading from "./loading";
import { all } from "redux-saga/effects";

const rootReducer = combineReducers({
  counter,
  sample,
  loading,
});

export function* rootSaga() {
  //all은 여러 개의 saga를 합쳐주는 함수
  yield all([counterSaga(), sampleSaga()]);
}
export default rootReducer;
